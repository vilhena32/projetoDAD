<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Item extends JsonResource
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
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'photo'=>$this->photo_url,
            'price'=>$this->price
          ];
    }
}
