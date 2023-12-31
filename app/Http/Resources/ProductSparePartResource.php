<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductSparePartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this->pivot);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->whenLoaded('media', $this->getFirstMediaUrl('image')),
            'category' => new ProductCategoryResource($this->whenLoaded('category')),
            'products' => new ProductCollection($this->whenLoaded('products')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            $this->merge($this->hasPivotLoaded('product_has_product_spare_parts') ? $this->whenPivotLoaded('product_has_product_spare_parts', function () {
                $this->pivot->p_id = $this->pivot->id;
                return $this->pivot;
            }) : []),
        ];
    }
}