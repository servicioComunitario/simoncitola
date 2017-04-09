<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Cargo;

class UpdateCargoRequest extends CreateCargoRequest
{
    /**
     * @override
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre" => "required|unique:cargos,nombre,".$this->cargo->id.","."id",
            'nivel'  => 'required|integer|min:0'
        ];
    }
}
