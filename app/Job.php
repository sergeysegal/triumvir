<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_id',
        'job_title',
        'team_title',
        'location',
        'role_desc',
        'responsibilities',
        'qualifications'
    ];
}
