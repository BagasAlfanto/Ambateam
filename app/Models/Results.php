<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'message'
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
     * Relationship with inputs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inputs()
    {
        return $this->belongsTo(Inputs::class);
    }
}
