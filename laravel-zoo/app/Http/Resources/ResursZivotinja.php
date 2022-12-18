<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursZivotinja extends JsonResource
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
            'Ime životinje - ' => $this->resource->ime,
            'Tip - ' => $this->resource->tip,
            'Godine - ' => $this->resource->godine,
            'Zoo - ' => new ResursZoo($this->resource->godine)
        ];
    }
}
