<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function reports()
    {
        $this->hasMany(Report::class);
    }

    public function thread()
    {
        $this->belongsTo(Thread::class);
    }

}
