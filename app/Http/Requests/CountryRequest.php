<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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


    public function messages()
    {
        return [
            'name_ar.required' =>  __('Please Insert Data'),
            'name_en.required' =>  __('Please Insert Data'),
            'name_fr.required' =>  __('Please Insert Data'),
            'code.required' =>  __('Please Insert Data'),
            'phone_code.required' =>  __('Please Insert Data'),
            'status.required' =>  __('Please Insert Data'),
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name_ar' => 'required',
          'name_en' => 'required',
          'name_fr' => 'sometimes',
          'code' => 'sometimes',
          'phone_code' => 'required',
          'status' => 'required',
        ];
    }
}
