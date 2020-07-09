<?php

namespace App\Models\Equipments;

use App\Models\Equipments\Equipment;

class Reward extends Equipment
{
    public $timestamps = false;

    public $type = 'reward';

    public function images()
    {
       return $this->morphMany('App\Models\Image', 'imageable');
    }
}
