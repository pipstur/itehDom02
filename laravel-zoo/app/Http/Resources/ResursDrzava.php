<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursDrzava extends JsonResource
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
            'Ime države - ' => $this->resource->ime,
            'Broj stanovnika - ' => $this->resource->broj_stanovnika,
            'Predsednik države - ' => $this->resource->predsednik
        ];
    }
}
