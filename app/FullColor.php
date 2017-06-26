<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FullColor extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'Size','One','Two','Three','Four','Five',
        'Six','Seven','Eight','Nine','Ten',
        'Eleven','Twelve','Thirteen','Fourteen','Fifteen',
        'Sixteen',
    ];
}
