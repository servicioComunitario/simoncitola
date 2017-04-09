<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Estado;

class UpdateEstadoRequest extends CreateEstadoRequest
{
    /**
     * @override
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre" => "required|unique:estados,nombre,".$this->estado->id.","."id",
        ];
    }
}
