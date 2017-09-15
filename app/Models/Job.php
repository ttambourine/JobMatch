<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = "jobs";

    protected $fillable = [
        'id', 'userid', 'description', 'amount', 'due_date', 'applicantid', 'tags'
    ];

    // applicant id = accepted applicant

    public function applications() {
        return $this->hasMany('App\Applicant', 'id');
    }

    public function owner() {
    	return $this->belongsTo('App\User', 'userid');
    }

    public function tags() {
    	return $this->belongsTo('App\JobTags', 'id');
    }
}
