<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PetRequest;
use App\Models\pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function pets()
    {
        $pets = pet::all();

        return view('admin.pets.index', compact('pets'));
    }

    public function formAdicionar()
    {

        return view('admin.pets.form');
    }
    public function adicionar(PetRequest $request)
    {
        pet::create($request->all());

        $request->session()->flash('sucesso', "Pet $request->nome cadastrado com sucesso!");

        return redirect()->route('admin.pets.listar');
    }
}
