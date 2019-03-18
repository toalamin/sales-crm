<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [''];

    public function meeting(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Meeting::class);
    }
}
