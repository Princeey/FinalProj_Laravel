<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'student_address',
        'student_email',
    ];

    // Define relationships if any (e.g., with Enrollment)
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
