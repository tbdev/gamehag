<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\UserEquipmentRepository;
use App\Repository\EquipmentRepository;
use App\Http\Resources\API\EquipmentsResource;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

        // tutaj trzeba użyć jakiegoś traita do filtrowania np.

        if ($req->has('type')) {
            if ($req->type == 'chests') {
                $userEquipment = new UserEquipmentRepository;
                return EquipmentsResource::collection($userEquipment->getChests());
            }

            if ($req->type == 'rewards') {
                $userEquipment = new UserEquipmentRepository;
                return EquipmentsResource::collection($userEquipment->getRewards()());
            }

            if ($req->type == 'runes') {
                $userEquipment = new UserEquipmentRepository;
                return EquipmentsResource::collection($userEquipment->getRunes());
            }

            if ($req->type == 'toBuy') {
                $e = new EquipmentRepository;
                return EquipmentsResource::collection($e->getAll());
            }
        } else {
            $userEquipment = new UserEquipmentRepository;
            return EquipmentsResource::collection($userEquipment->getAll());
        }
    }
}
