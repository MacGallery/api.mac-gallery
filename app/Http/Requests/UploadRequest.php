<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            'model' => 'string|required',
            'model_id' => 'integer|required',
            'collection_name' => 'string|required',
            'image' => 'image|nullable|required_without:images',
            'images' => 'array|nullable|required_without:image',
            'images.*' => 'image'
        ];
    }
}
