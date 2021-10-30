<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'client_name' => 'required|string|max:255',
            'client_city' => 'required|numeric|exists:branches,id',
            'flower_id' => 'required|numeric|exists:flowers,id',
            'delivery_branch_id' => 'required|numeric|exists:branches,id',
            'recipient_name' => 'required|string|max:255',
            'delivery_date' => 'required|date',
            'delivery_address' => 'required|string',
        ];
    }
}
