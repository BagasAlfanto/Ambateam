<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class analized extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'analized';
}
