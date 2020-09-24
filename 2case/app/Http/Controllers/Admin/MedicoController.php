<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Medico;

class MedicoController extends Controller
{

//     private $medico;
//    public function _construct(Medico $medico){
//        $this->medico = $medico;
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = \App\Medico::paginate(4);;
        return view('admin.medicos.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = \App\Medico::all(['id','nome']);
        return view('admin.medicos.create', compact('medicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Medico $medico)
    {
    $medico->create($request->all());
    flash('Medico Criado com Sucesso!')->success();
    return redirect()->route('admin.medicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($medico)
    {
        $medico = \App\Medico::find($medico);
        return view('admin.medicos.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $medico)
    {
        $data = $request->all();
        $medico = \App\Medico::find($medico);
        $medico->update($data);
        flash('Medico Atualizado com Sucesso!')->success();
        return redirect()->route('admin.medicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($medico)
    {
        $medico = \App\Medico::find($medico);
        $medico->delete();
        flash('Medico Removido com Sucesso!')->success();
        return redirect()->route('admin.medicos.index');
    }
}
