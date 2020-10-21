<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crud::latest()->paginate(5);
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'meno' => 'required',
            'priezvisko' => 'required',
            'heslo' => 'required',
            'vek' => 'required'
        ]);

        $data_formularu = array(
            'meno' => $request->meno,
            'priezvisko' => $request->priezvisko,
            'heslo' => $request->heslo,
            'vek' => $request->vek
        );

        Crud::create($data_formularu);
        return redirect('crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'meno' => 'required',
            'priezvisko' => 'required',
            'heslo' => 'required',
            'vek' => 'required'
        ]);

        $data_formularu = array(
            'meno' => $request->meno,
            'priezvisko' => $request->priezvisko,
            'heslo' => $request->heslo,
            'vek' => $request->vek
        );

        Crud::whereId($id)->update($data_formularu);
        return redirect('crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();

        return redirect('crud');
    }
}
