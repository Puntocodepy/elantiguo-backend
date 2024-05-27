<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductProviderCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'provider_id' => $this->provider_id,
            'provider' => $this->provider->proveedor,
            'city' => $this->provider->ciudad,
            'price' => $this->price,
            'tax' => $this->tax,
            'measure' => $this->measures->name,
        ];
    }
}
