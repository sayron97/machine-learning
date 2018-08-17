<?php
/**
 * Created by PhpStorm.
 * User: sayron97
 * Date: 14.08.18
 * Time: 5:15 PM
 */

namespace App\Traits;
use App\Repository\GamesRepository;
use App\Repository\StepsRepository;
use Illuminate\Support\Facades\Session;

trait GameTrait
{
    private $gamesRepo,$stepsRepo;

    public function __construct()
    {
        $this->gamesRepo = new GamesRepository();
        $this->stepsRepo = new StepsRepository();
    }

    public function getPreviousGames($first)
     {
         return $this->stepsRepo->getByPlayer($first);
     }

     public function nextStep($historyGames)
     {
         if(count($historyGames) == 0){
             for($i = 0; $i < 1; $i--) {
                 $rand = rand(1, 9);
                 if (!Session::has('count_' . $rand)) {
                     $nextStep = $rand;
                     break;
                 }
             }
         }else{

         }
         return $nextStep;
     }

     public function newPost($first)
     {
         $this->stepsRepo->post(['first_start' => $first]);
     }

     public function updateGame($step_num,$step)
     {
        $this->stepsRepo->update(['step_num' => $step_num, 'step' => $step]);
     }

     public function setLastId()
     {
         $this->stepsRepo->lastId();
     }

     public function changePlayer()
     {
         if(Session::get('currentPlayer') == 'user'){
             Session::put('currentPlayer','computer');
         }else{
             Session::put('currentPlayer','user');
         }
     }

     public function madedStep($request)
     {
         while($arr = current($request->check)){
             $current_step = key($request->check);
             break;
         }
         return $current_step;
     }
}