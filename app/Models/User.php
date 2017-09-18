<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable {
    use Notifiable;

    protected $table = "users";

    protected $fillable = [
        'fname', 'lname', 'mobile', 'address', 'email', 'password',
        'account_type', 'avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fullName() {
        return $this->fname . " " . $this->lname;
    }

    public function tags() { 
        return $this->belongsTo('App\Models\UserTag', 'id');
    }

    public function jobs() {
        return $this->hasMany('App\Models\Job');
    }

    public function applications() {
        return $this->hasMany('App\Models\Applicant');
    }

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }
}
