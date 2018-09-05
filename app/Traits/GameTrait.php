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
    private $gamesRepo, $stepsRepo;

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
        $gamesLikeThis = array();
        $isset = false;
        $resArray = array();
        if (count($historyGames) == 0) {
            for ($i = 0; $i < 1; $i--) {
                $rand = rand(1, 9);
                if (!Session::has('count_' . $rand)) {
                    $nextStep = $rand;
                    break;
                }
            }
        } else {
           $step_num = Session::get('step_num');
           for($i = 1; $i <= $step_num; $i++){
               $res = 'res_'.$i;
               $resArray[] = ['res_'.$i => Session::get($res)];
               foreach ($historyGames as $game){
                   if($game->$res == Session::get($res) && $game->$res != NULL){
                       $gamesLikeThis[] = $game;
                       $isset = true;
                   }
               }
            }
            if($isset){
                $this->sortSimilarGames($gamesLikeThis,$step_num,$resArray);
            }
            else{
                $nextStep = rand(1, 9);
            }
        }
        return $nextStep;
    }

    private function sortSimilarGames($games,$step_num,$resArray)
    {
        ///
    }

    public function newPost($first)
    {
        $this->stepsRepo->post(['first_start' => $first]);
    }

    public function updateGame($step_num, $step)
    {
        $this->stepsRepo->update(['step_num' => $step_num, 'step' => $step]);
    }

    public function setLastId()
    {
        $this->stepsRepo->lastId();
    }

    public function changePlayer()
    {
        if (Session::get('currentPlayer') == 'user') {
            Session::put('currentPlayer', 'computer');
        } else {
            Session::put('currentPlayer', 'user');
        }
    }

    public function madedStep($request)
    {
        while ($arr = current($request->check)) {
            $current_step = key($request->check);
            break;
        }
        return $current_step;
    }

    public function checkIsVictory()
    {
        $d1 = Session::get('count_1');
        $d2 = Session::get('count_2');
        $d3 = Session::get('count_3');
        $d4 = Session::get('count_4');
        $d5 = Session::get('count_5');
        $d6 = Session::get('count_6');
        $d7 = Session::get('count_7');
        $d8 = Session::get('count_8');
        $d9 = Session::get('count_9');

        if (
            ($d1 == 'x.png' && $d2 == 'x.png' && $d3 == 'x.png') ||
            ($d4 == 'x.png' && $d5 == 'x.png' && $d6 == 'x.png') ||
            ($d7 == 'x.png' && $d8 == 'x.png' && $d9 == 'x.png') ||
            ($d1 == 'x.png' && $d4 == 'x.png' && $d7 == 'x.png') ||
            ($d2 == 'x.png' && $d5 == 'x.png' && $d8 == 'x.png') ||
            ($d3 == 'x.png' && $d6 == 'x.png' && $d9 == 'x.png') ||
            ($d1 == 'x.png' && $d5 == 'x.png' && $d9 == 'x.png') ||
            ($d3 == 'x.png' && $d5 == 'x.png' && $d7 == 'x.png')
        ) {
            $this->stepsRepo->finish();
            return 'X - victory';
        }

        if (
            ($d1 == '0.png' && $d2 == '0.png' && $d3 == '0.png') ||
            ($d4 == '0.png' && $d5 == '0.png' && $d6 == '0.png') ||
            ($d7 == '0.png' && $d8 == '0.png' && $d9 == '0.png') ||
            ($d1 == '0.png' && $d4 == '0.png' && $d7 == '0.png') ||
            ($d2 == '0.png' && $d5 == '0.png' && $d8 == '0.png') ||
            ($d3 == '0.png' && $d6 == '0.png' && $d9 == '0.png') ||
            ($d1 == '0.png' && $d5 == '0.png' && $d9 == '0.png') ||
            ($d3 == '0.png' && $d5 == '0.png' && $d7 == '0.png')
        ) {
            $this->stepsRepo->finish();
            return '0 - victory';
        }
        return false;
    }
}