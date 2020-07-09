<?php

namespace App\Repository;

use App\Models\Equipments\UserEquipment;
use Illuminate\Support\Facades\Auth;

class UserEquipmentRepository
{
    public function getChests()
    {
        return UserEquipment::find(Auth::user()->id)->chests()->with('images')->get();
    }
    
    public function getRewards()
    {
        return UserEquipment::find(Auth::user()->id)->rewards()->with('images')->get();
    }
    
    public function getRunes()
    {
        return UserEquipment::find(Auth::user()->id)->runes()->with('images')->get();
    }

    public function getAll()
    {
        return $this->getChests()
            ->concat($this->getRewards())
            ->concat($this->getRunes());
    }
}
