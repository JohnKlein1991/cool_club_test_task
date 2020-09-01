<?php

namespace App\Http\Requests\Api\Emails;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
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
            'content' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'Напишите хотя бы пару строк, пожалуйста',
            'content.min' => 'Слишком мало текста для полноценного письма',
        ];
    }
}
