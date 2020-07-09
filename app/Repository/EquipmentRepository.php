<?php

namespace App\Repository;

use Illuminate\Support\Facades\Auth;

use App\Models\Equipments\Chest;
use App\Models\Equipments\Reward;
use App\Models\Equipments\Rune;

class EquipmentRepository 
{
    public function getChests()
    {
        return Chest::with('images')->get();
    }
    
    public function getRewards()
    {
        return Reward::with('images')->get();
    }
    
    public function getRunes()
    {
        return Rune::with('images')->get();
    }

    public function getAll()
    {
        return $this->getChests()
            ->concat($this->getRewards())
            ->concat($this->getRunes());
    }
}
