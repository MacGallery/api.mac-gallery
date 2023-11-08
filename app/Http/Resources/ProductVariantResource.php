<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

class ProductVariantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this->getImages());
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'stock' => $this->stock,
            'visible' => $this->visible,
            'product_id' => $this->product_id,
            // 'product' => new ProductResource($this->whenLoaded('product')),
            'images' => $this->getImages(),
            // 'images' => collect($this->getImages())->map(function ($e) {
            //     return ['name' => $e['name'], 'url' => $e['url'], 'uuid' => $e['uuid']];
            // }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
