<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cargo;
use App\Http\Requests\CreateCargoRequest;
use App\Http\Requests\UpdateCargoRequest;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();
        return view("cargo.index")->with("cargos", $cargos);
    }

    public function create()
    {
        $cargo = new Cargo();
        return view("cargo.create")->with('cargo', $cargo);
    }

    public function store(CreateCargoRequest $request)
    {

        try {
            DB::beginTransaction();

            $cargo = Cargo::create($request->only(
                'nombre',
                'nivel'
            ));

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        return redirect()->route('cargos.edit', $cargo->id);
    }

    public function show($id, $otro)
    {
        return "Show";
    }

    public function edit(Cargo $cargo)
    {
        return view("cargo.edit")->with("cargo", $cargo);
    }

    public function update(UpdateCargoRequest $request, Cargo $cargo)
    {
        try {
            DB::beginTransaction();

            $cargo->update(
                $request->only(
                    'nombre',
                    'nivel'
                )
            );
            
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        return redirect()->route('cargos.edit', $cargo->id);
    }

    public function destroy(Cargo $cargo)
    {
        try {
            $cargo->delete();
        } catch (Exception $e) {
            
        }

        return redirect()->route('cargos.index');
    }
}
