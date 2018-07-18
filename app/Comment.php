<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'movie_id'
    ];

    public function movie() {
        return $this->belongsTo(Movie::Class); // this will return join of comments associated wwith movie
    }
}
