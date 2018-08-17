<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\SessionTrait;
use App\Traits\GameTrait;

class GameController extends Controller
{
    use SessionTrait, GameTrait;

    public function index() {
        return view('welcome');
    }

    public function count(Request $request)
    {
        //dd($request);
        $first = $this->getFirst();
        $historyGames = $this->getPreviousGames($first);
       // $this->makeStep($this->nextStep($historyGames));
        $this->makeStep($this->madedStep($request));

        $this->changePlayer();
        if(Session::get('currentPlayer') == 'computer'){
            $this->computerStep();
        }
        return redirect()->back();
    }

    public function clear(Request $request)
    {
        $request->session()->flush();
        return redirect()->back();
    }

    public function first(Request $request)
    {
        //dd($request);
        if(isset($request->user)){
            Session::put('first','user');
            Session::put('currentPlayer','user');
            $this->newPost('user');
        }

        if(isset($request->computer)){
            Session::put('first','computer');
            Session::put('currentPlayer','computer');
            $this->newPost('computer');
        }
        $this->setLastId();
        return redirect()->route('start');
    }

    public function start()
    {
        Session::put('step_num',1);
        $this->computerStep();
        return redirect()->route('index');
    }

    public function makeStep($current_step){
        //dd($current_step);
        $current_step = (string) $current_step;
        $currentPlayer = $this->getCurrentPlayer();
        $this->updateGame(Session::get('step_num'),$current_step);
        Session::put('step_num',Session::get('step_num')+1);
        Session::put('count_'.$current_step, $this->getImg($currentPlayer));
        //dd(Session::get('count_8'));
    }

    public function computerStep(){
        $first = $this->getFirst();
        $historyGames = $this->getPreviousGames($first);
        $nextStep = $this->nextStep($historyGames);
        $this->makeStep($nextStep);

        $this->changePlayer();
    }


}
