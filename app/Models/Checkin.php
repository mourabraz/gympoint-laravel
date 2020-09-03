<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $fillable = [
        'student_id'
    ];

    protected $casts = [
        //
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
