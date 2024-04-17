<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'photo', 'user_id', 'likes_count', 'views_count'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function incrementLikes()
    {
        $this->likes_count++;
        $this->save();
    }

    public function incrementViews()
    {
        $this->views_count++;
        $this->save();
    }
}
