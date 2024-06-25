<?php

namespace App\Http\Controllers;

use App\Models\crud;
use App\Http\Requests\StorecrudRequest;
use App\Http\Requests\UpdatecrudRequest;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    public function dashboard(){
        $total_data = crud::count();
        return view('dashboard.dashboard',compact('total_data'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = crud::all();
        return view('crud.data', compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // crud::create($request->all());

        // return redirect()->route('crud.data');

        // $validate = $request->validated();

        $crud = new crud;
        $crud->namapasien = $request->namapasien;
        $crud->pekerjaan = $request->pekerjaan;
        $crud->alamat = $request->alamat;
        $crud->alamat = $request->agama;
        $crud->email = $request->email;
        $crud->no_handphone = $request->no_handphone;
        $crud->save();

        return redirect()->route('crud.data');
    }


    public function show(crud $crud)
    {
        // $crud = crud::findOrFail($nama);

        return view('crud.show', compact('crud'));
    }

    public function edit(crud $crud)
    {
        return view('crud.edit', compact('crud'));
    }


    public function update(Request $request, crud $crud)
    {
        // $crud ->update($request->all());
        $crud->namapasien = $request->namapasien;
        $crud->pekerjaan = $request->pekerjaan;
        $crud->alamat = $request->alamat;
        $crud->alamat = $request->agama;
        $crud->email = $request->email;
        $crud->no_handphone = $request->no_handphone;
        $crud->save();

        return redirect()->route('crud.data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crud $crud)
    {
        $crud -> delete();

        return redirect()->route('crud.data');
    }
}
