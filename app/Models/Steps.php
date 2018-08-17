<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    protected $table = 'steps';

    protected $fillable = [
        'step_num',
        'res_1',
        'res_2',
        'res_3',
        'res_4',
        'res_5',
        'res_6',
        'res_7',
        'res_8',
        'res_9',
        'result',
        'first_start'
    ];
}
