<?php

namespace App\Models\Equipments;

use App\Models\Equipments\Equipment;

class Chest extends Equipment
{
    public $timestamps = false;

    public $type = 'chest';

    public function images()
    {
       return $this->morphMany('App\Models\Image', 'imageable');
    }
}
