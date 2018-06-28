<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    public function count(Request $request){
        //$request->session()->flush();
       // dd($request);
        $current_step = null;
        while($arr = current($request->check)){
            $current_step = key($request->check);
            break;
        }

        if (!Session::has('current_player')) {
            $current_player = 'x';

        }
        else{
            $current_player = Session::get('current_player');
        }

        if($current_player == 'x'){
            $img = 'x.png';
            Session::put('current_player', '0');
        }
        else{
            $img = '0.png';
            Session::put('current_player', 'x');
        }
        $current_step = (string) $current_step;

        Session::put('count_'.$current_step, $img);
        //dd(Session::get('current_player'));
        return redirect()->back();
    }
}
