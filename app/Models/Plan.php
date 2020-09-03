<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'title', 'duration', 'price'
    ];

    protected $casts = [
        //'price' => 'float',
    ];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
