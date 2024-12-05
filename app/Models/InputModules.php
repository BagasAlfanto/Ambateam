<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputModules extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'input_has_modules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'input_id',
        'module_id'
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
