<?php

namespace App\Http\Requests\Admin\Property;

use Illuminate\Foundation\Http\FormRequest;

class PropertyUpdateRequest extends FormRequest
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

    public function rules()
    {
        $rules = [
            'city_id'               => 'required',
            'country_id'            => 'required',
            'currency_id'           => 'required',
            'property_type_id'      => 'required',
            'property_status_id'    => 'required',
            'agency_id'             => 'required',
            'rooms'                 => 'required|numeric|min:1',
            'bedrooms'              => 'required|numeric',
            'bathrooms'             => 'required|numeric',
            'garages'               => 'required|numeric',
            'plot_area'             => 'required|numeric',
            'construction_area'     => 'required|numeric',
            'price'                 => 'required|numeric',
            'image'                 => 'image|mimes:jpg,jpeg,png,svg',
        ];

        return $rules;
    }
}
