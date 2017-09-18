<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    protected $table = "reviews";

    protected $fillable = [
        'userid', 'jobid', 'rating', 'description'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'userid');
    }

    public function job() {
        return $this->belongsTo('App\Job', 'jobid');
    }

    public function reviewer() {
        return $this->belongsTo('App\User', 'jobowner');
    }
}
