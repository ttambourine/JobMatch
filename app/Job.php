<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = "jobs";

    protected $fillable = [
        'id', 'userid', 'description', 'amount', 'due_date', 'applicantid',
        'tag1', 'tag2', 'tag3', 'lat' 'lng'
    ];

    // applicant id = accepted applicant

    public function applications() {
        return $this->hasMany('App\Applicant', 'id');
    }

    public function owner() {
    	return $this->belongsTo('App\User', 'userid');
    }

    public function tags() {
        return array($this->tag1, $this->tag2, $this->tag3);
    }
}
