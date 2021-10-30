<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlowersRequest extends FormRequest
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
            'branch_id' => 'required|integer|exists:branches,id',
            'occasion_id' => 'required|integer|exists:occasions,id',
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'required|image',
        ];
    }
}
