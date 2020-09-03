<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'student_id', 'plan_id', 'price', 'start_at', 'end_at'
    ];

    protected $casts = [
        //'start_at' => 'datetime',
        //'end_at' => 'datetime',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
