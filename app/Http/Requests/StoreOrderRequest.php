<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'company_name' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'email' => 'required|email|unique:order_addresses',
            'phone'=>'required|numeric|min:9',
        ];
    }
}
