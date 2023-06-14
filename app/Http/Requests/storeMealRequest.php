<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeMealRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'MealName' => ['required'],
            'MealDesc' => ['required']

        ];
    }
    
    public function messages()
    {
         return[
            'MealName.required'=>"The Meal Name required",
            'MealDesc.required'=>"The Meal Description required"
         ];
    }
}
