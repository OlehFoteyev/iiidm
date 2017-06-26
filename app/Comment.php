<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'comment','phone','user_id'
    ];

    public function user()  //$comment->user->name
    {
        return $this->belongsTo(User::class);
    }
}
