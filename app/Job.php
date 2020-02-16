<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_id',
        'job_title',
        'job_family',
        'location',
        'role_desc',
        'responsibilities',
        'qualifications'
    ];
}
