<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable {
    use Notifiable;

    protected $table = "users";

    protected $fillable = [
        'id', 'fname', 'lname', 'mobile', 'address', 'email', 'password',
        'account_type', 'avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getId() {
        return $this->id;
    }

    public function fullName() {
        return $this->fname . " " . $this->lname;
    }

    public function tags() { 
        return $this->belongsTo('App\UserTag', 'id');
    }

    public function jobs() {
        return $this->hasMany('App\Job');
    }

    public function applications() {
        return $this->hasMany('App\Applicant');
    }

    public function reviews() {
        return $this->hasMany('App\Review');
    }
}
