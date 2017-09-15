<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTags extends Model {
    protected $table = "jobtags";

    protected $fillable = [
        'jobid', 'tagid'
    ];

    public function tags() { 
        return $this->hasMany('App\Tag', 'tagid');
    }
}
