<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractFormRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'matricula' => ['required', 'max:1'],
            'orgao_id' =>  ['required'],
            'serve_id' =>  ['required'],
            'serve_id' =>  ['required'],
            'funcao_id' => ['required']
        ];
    }

}
