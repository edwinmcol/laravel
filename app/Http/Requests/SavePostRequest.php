<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        // if ($this->isMethod('PATH')){
        //     return [
        //         'title' => ['min:8'],
        //     ];
        // }  Para tener otra validacion dependiendo de la funcion editar o update

        return [
            'title' => ['required', 'min:4'],
            'body' => ['required']
        ];
    }
}
