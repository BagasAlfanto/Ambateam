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
        'total_quiz',
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

    /**
     * Relationship with user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship with modules.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modules()
    {
        return $this->hasMany(InputModules::class);
    }

    /**
     * Relationship with results.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function results()
    {
        return $this->hasOne(Results::class, 'id', 'result_id');
    }
}
