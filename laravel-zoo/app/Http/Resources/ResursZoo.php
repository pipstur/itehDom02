<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursZoo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Ime Zoo-a - ' => $this->resource->naziv,
            'Adresa - ' => $this->resource->adresa,
            'Država - ' => new ResursDrzava($this->resource->drzava),
        ];
    }
}
