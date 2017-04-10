<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Motivo;

class UpdateMotivoRequest extends CreateMotivoRequest
{
    /**
     * @override
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre"      => "required|unique:motivos,nombre,".$this->motivo->id.","."id",
            'descripcion' => "required|unique:motivos,descripcion,".$this->motivo->id.","."id"
        ];
    }
}
