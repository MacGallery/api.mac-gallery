<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductVariantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // if ($this->route()->hasParameter('product')) {
        //     $this->request->add(['product_id' => $this->route()->product->id]);
        // }
        return [
            // 'product_id' => 'required|exists:products,id',
            ...($this->route()->hasParameter('product') ? [] : ['product_id' => 'required|exists:products,id']),
            'name' => 'required|string',
            'price' => 'required|integer',
            'stock' => 'integer',
            'visible' => 'boolean',
            'images' => 'array|nullable',
            'images.*' => 'image'
        ];
    }
}
