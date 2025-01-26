<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'title', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
