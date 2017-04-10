<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rol;

class UpdateRolRequest extends CreateRolRequest
{
    /**
     * @override
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre" => "required|unique:roles,nombre,".$this->rol->id.","."id",
        ];
    }
}
