<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
use Carbon\Carbon;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'weight', 'height', 'birthday_at'
    ];

    protected $casts = [
        'birthday_at' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)
            ->where('role', 'student');
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function checkins()
    {
        return $this->hasMany(Checkin::class);
    }

    public function helpOrders()
    {
        return $this->hasMany(HelpOrder::class);
    }

    public function getAge()
    {
        return $this->birthday_at->diffInYears(Carbon::now());
    }
}
