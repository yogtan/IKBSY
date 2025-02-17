<?php

namespace App\Models;

use App\Models\Blog;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category'
    ];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
