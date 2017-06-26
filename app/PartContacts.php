<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartContacts extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'phone',
        'email'
    ];
}
