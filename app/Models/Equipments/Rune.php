<?php

namespace App\Models\Equipments;

use App\Models\Equipments\Equipment;

class Rune extends Equipment
{
    public $timestamps = false;

    public $type = 'rune';

    public function images()
    {
       return $this->morphMany('App\Models\Image', 'imageable');
    }
}


