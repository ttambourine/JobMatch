<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = "jobs";

    protected $fillable = [
        'jobid', 'jobowner', 'description', 'amount', 'due_date', 'applicantid', 'tags'
    ];

    // applicant id = accepted applicant

    public function applications() {
        return $this->hasMany('App\Applicant', 'jobid');
    }
}
