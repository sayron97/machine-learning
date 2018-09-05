<?php
/**
 * Created by PhpStorm.
 * User: sayron97
 * Date: 14.08.18
 * Time: 5:15 PM
 */

namespace App\Repository;

use App\Models\Steps;
use Illuminate\Support\Facades\Session;

class StepsRepository implements BaseRepository
{
    public function getByPlayer($firstStart)
    {
        return Steps::where('first_start', $firstStart)->where('result', 'computer')->get();
    }

    public function post($arr)
    {
        Steps::create([
            'first_start' => $arr['first_start']
        ]);
    }

    public function lastId()
    {
        $last = is_null(Steps::orderBy('id', 'desc')->first()->id) ? 1 : Steps::orderBy('id', 'desc')->first()->id;
        Session::put('gameId', $last);
    }

    public function update($arr)
    {
        Session::put('res_'.$arr['step_num'],$arr['step']);
        Steps::where('id', Session::get('gameId'))->update([
            'step_num' => $arr['step_num'],
            'res_' . $arr['step_num'] => $arr['step']
        ]);
    }

    public function finish()
    {
        //dd(Session::get('current_player'));
        Steps::where('id', Session::get('gameId'))->update([
            'result' => Session::get('currentPlayer')
        ]);
    }
}