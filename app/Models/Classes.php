<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "class_name",
        "course_id",
        "teacher_id",
        "date_start",
        "time_study",
        "schedule"
    ];
    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
}
