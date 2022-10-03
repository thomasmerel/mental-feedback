<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'color',
        'value'
    ];

    const NO_DATA = 'No data';
    const GREAT = 'Great';
    const GOOD = 'Good';
    const OK = 'Ok';
    const MEH = 'Meh';
    const NOT_GOOD = 'Not Good';
    const BAD = 'Bad';
    const AWFUL = 'Awful';

    /**
     * @return HasMany
     */
    public function days(): HasMany
    {
        return $this->hasMany(Day::class);
    }
}
