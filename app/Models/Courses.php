<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "course_name",
        "price",
        "discount",
        "category_id",
        "category_id",
        "description",
        "overview",
        "slug",
        "image",
        "image_public_id",
        "background",
        "background_public_id",
        "number_of_sessions",
        "lessons"


    ];
    public function review()
    {
        return $this->hasMany(UserReviews::class, 'course_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
