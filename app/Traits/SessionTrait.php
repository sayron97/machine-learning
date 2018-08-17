<?php
/**
 * Created by PhpStorm.
 * User: sayron97
 * Date: 13.08.18
 * Time: 5:20 PM
 */

namespace App\Traits;
use Illuminate\Support\Facades\Session;

trait SessionTrait
{
    public function getCurrentPlayer()
    {
        return (!Session::has('current_player')) ? 'x' : Session::get('current_player');
    }

    public function getImg($currentPlayer)
    {
        if ($currentPlayer == 'x') {
            $img = 'x.png';
            Session::put('current_player', '0');
        } else {
            $img = '0.png';
            Session::put('current_player', 'x');
        }
        return $img;
    }

    public function getFirst()
    {
        return Session::get('first');
    }
}