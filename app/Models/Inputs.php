<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'total_hours',
        'comprehesion_index',
        'date',
        'result_id'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];
}
