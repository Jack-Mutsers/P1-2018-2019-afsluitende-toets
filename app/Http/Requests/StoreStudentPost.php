<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentPost extends FormRequest
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
            'name' => 'required|unique:classmates|max:255',
            'average' => 'required|min:1|max:10',
        ];
    }
	
    public function messages()
    {
        return [
            'name.required' => 'vul een geldige naam in',
            'average.required' => 'vul een gemiddelde in tussen de 1 en de 10',
        ];
    }
}
