<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return (new PaginatorCollection($this));
        dd($this);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'product_category_id' => $this->product_category_id,
            'category' => new ProductCategoryResource($this->whenLoaded('category')),
            'variants' => new ProductVariantCollection($this->whenLoaded('variants')),
            'spareParts' => new ProductSparePartCollection($this->whenLoaded('spareParts')),
            // $this->merge($this->whenPivotLoaded('product_has_product_spare_parts', $this->pivot)),
            'image' => $this->getFirstMediaUrl('image'),
            'visible' => $this->visible,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
