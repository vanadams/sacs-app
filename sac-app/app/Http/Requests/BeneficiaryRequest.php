<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiaryRequest extends FormRequest
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
            'pangalan' => 'required|string|max:255',
            'kasarian' => 'required|string|in:lalaki,babae',
            'tirahan' => 'required|string|max:255',
            'kalye' => 'nullable|string|max:255',
            'uri_ng_id' => 'nullable|string|max:255',
            'barangay' => 'required|string|max:255',
            'lungsod_bayan' => 'required|string|max:255',
            'numero_ng_id' => 'nullable|string|max:255',
            'probinsya' => 'required|string|max:255',
            'rehiyon' => 'required|string|max:255',
            'petsa_ng_kapanganakan' => 'required|date|before:today',
            'trabaho' => 'nullable|string|max:255',
            'buwang_kita' => 'nullable|numeric|between:0,999999.99',
            'cellphone_no' => 'nullable|digits:11',
            'lugar_ng_trabaho' => 'nullable|string|max:255',
            'sektor' => 'nullable|string|max:255',
            'kondisyon_ng_kalusugan' => 'nullable|string|max:255',
            'bene_ng_uct' => 'nullable|boolean',
            'bene_ng_4ps' => 'nullable|boolean',
            'katutubo' => 'nullable|boolean',
            'uri_ng_katutubo' => 'nullable|string|max:255',
            'others' => 'nullable|boolean',
            'uri_ng_others' => 'nullable|string|max:255'
        ];
    }
}
