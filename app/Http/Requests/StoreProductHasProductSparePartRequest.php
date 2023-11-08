<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductHasProductSparePartRequest extends FormRequest
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
        return [
            'product_spare_part_id' => 'required|exists:product_spare_parts,id',
            'additional_info' => 'nullable',
            'item_price' => 'integer',
            'service_price' => 'integer',
            'stock' => 'integer'
        ];
    }
}
