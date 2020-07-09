<?php

namespace App\Models\Equipments;

use App\Models\User;
use App\Interfaces\UserEquipmentInterface;

class UserEquipment extends User implements UserEquipmentInterface
{
    protected $table = 'equipments';

    public function chests()
    {
        return $this->morphedByMany(Chest::class, 'equipmentable', 'equipments', 'user_id', 'equipmentable_id');
    }

    public function rewards()
    {
        return $this->morphedByMany(Reward::class, 'equipmentable', 'equipments', 'user_id', 'equipmentable_id');
    }

    public function runes()
    {
        return $this->morphedByMany(Rune::class, 'equipmentable', 'equipments', 'user_id', 'equipmentable_id');
    }
}
