<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Day extends Model
{
    protected $fillable = [
        'label',
        'color',
        'value'
    ];

    /**
     * @return HasOne
     */
    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }
}
