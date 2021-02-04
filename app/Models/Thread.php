<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function posts()
    {
        $this->hasMany(Post::class);
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
