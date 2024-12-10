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

    /**
     * Relationship with inputs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inputs()
    {
        return $this->belongsTo(Inputs::class);
    }

    /**
     * Relationship with modules.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modules()
    {
        return $this->belongsTo(Modules::class);
    }
}
