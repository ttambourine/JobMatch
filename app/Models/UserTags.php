<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTags extends Model {
    protected $table = "usertags";

    protected $fillable = [
        'userid', 'tag'
    ];

    public function tags() { 
        return $this->hasMany('App\Tag', 'tag');
    }
}
