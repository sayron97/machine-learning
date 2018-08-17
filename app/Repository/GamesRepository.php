<?php
/**
 * Created by PhpStorm.
 * User: sayron97
 * Date: 14.08.18
 * Time: 5:15 PM
 */

namespace App\Repository;
use App\Models\Games;

class GamesRepository implements BaseRepository
{
    public function getByPlayer($firstStart)
    {
        return Games::where('first_start',$firstStart)->get();
    }

    public function finish()
    {
        // TODO: Implement finish() method.
    }
    public function update($arr)
    {
        // TODO: Implement update() method.
    }
    public function post($arr)
    {
        // TODO: Implement post() method.
    }
    public function lastId()
    {
        // TODO: Implement lastId() method.
    }
}