<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    protected $fillable = [
        'demo_id',
        'user_id',
        'file_name'
    ];
}
