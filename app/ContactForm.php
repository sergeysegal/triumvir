<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
        'email',
        'subject',
        'message'
    ];
}
