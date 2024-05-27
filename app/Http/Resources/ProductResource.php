<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->name,
            'code'          => $this->code,
            'min_stock'     => $this->min_stock,
            'stock'         => $this->stock,
            'measure_id'    => $this->measure_id,
            'measure_stock' => $this->measures->name,
            'comment'       => $this->comment,
            'providers'     => ProductProviderCollection::collection($this->productProvider)
        ];
    }
}
