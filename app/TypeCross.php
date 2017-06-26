<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCross extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'type','title_img','priceUnilateral','priceBilateral','color','signHeight',
        'signWight','typeOfDescription','pixelPitch','brightness','powerConsumption','lifeTime',
    ];
}
