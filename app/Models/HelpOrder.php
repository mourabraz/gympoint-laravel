<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HelpOrder extends Model
{
    protected $fillable = [
        'student_id', 'question', 'answer', 'answer_at'
    ];

    protected $casts = [
        'answer_at' => 'datetime',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
