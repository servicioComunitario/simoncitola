<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Parentesco;

class UpdateParentescoRequest extends CreateParentescoRequest
{
    /**
     * @override
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre" => "required|unique:parentescos,nombre,".$this->parentesco->id.","."id",
        ];
    }
}
