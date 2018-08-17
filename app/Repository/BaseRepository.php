<?php
/**
 * Created by PhpStorm.
 * User: sayron97
 * Date: 14.08.18
 * Time: 5:15 PM
 */

namespace App\Repository;


interface BaseRepository
{
    public function getByPlayer($firstStart);

    public function post($arr);

    public function lastId();

    public function update($arr);

    public function finish();
}