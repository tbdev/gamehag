<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

class EquipmentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        $response = [
            'type' => $this->type,
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'image' => $this->images->first()->path
        ];

        if($this->code !== null) $response = Arr::add($response, 'code', $this->code);
        if($this->status !== null) $response = Arr::add($response, 'status', $this->status);
        if($this->bonus !== null) $response = Arr::add($response, 'bonus', $this->bonus);

        return $response;
    }
}
