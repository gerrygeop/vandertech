<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AffiliationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'logo_path' => 'image|mimes:jpg,jpeg,png',
            'description' => 'required',
            'layanan_jasa' => 'nullable',
            'visi' => 'nullable|string',
            'misi' => 'nullable',
            'address' => 'nullable',
            'telp' => 'nullable',
            'email' => 'nullable|email',
            'maps' => 'nullable',
            'hidden' => 'bool',
            'slug' => 'nullable',
            'order' => 'numeric',
        ];
    }
}
