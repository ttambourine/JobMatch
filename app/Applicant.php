<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {
    protected $table = "applicants";

    protected $fillable = [
        'userid', 'jobid', 'status'
    ];

    public function job() {
        return $this->belongsTo('App\Job', 'jobid');
    }

    public function user() {
        return $this->belongsTo('App\User', 'userid');
    }
}
