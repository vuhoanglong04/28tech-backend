<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banners extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "banners_marketing";
    protected $fillable =[
        "banner_url",
        "banner_public_id",
        "href"
    ];
}
