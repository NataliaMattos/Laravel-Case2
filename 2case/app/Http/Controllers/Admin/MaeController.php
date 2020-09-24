<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mae;

class MaeController extends Controller
{

//     private $mae;
//    public function _construct(Mae $mae){
//        $this->mae = $mae;
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maes = \App\Mae::paginate(4);;
        return view('admin.maes.index', compact('maes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maes = \App\Mae::all(['id','nome']);
        return view('admin.maes.create', compact('maes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mae $mae)
    {
    $mae->create($request->all());
    flash('Bebe Criado com Sucesso!')->success();
    return redirect()->route('admin.maes.index');
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
     * @param  int  $mae
     * @return \Illuminate\Http\Response
     */
    public function edit($mae)
    {
        $mae = \App\Mae::find($mae);
        return view('admin.maes.edit', compact('mae'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  mae
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mae)
    {
        $data = $request->all();
        $mae = \App\Mae::find($mae);
        $mae->update($data);
        flash('Mae Atualizada com Sucesso!')->success();
        return redirect()->route('admin.maes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $mae
     * @return \Illuminate\Http\Response
     */
    public function destroy($mae)
    {
        $mae = \App\Mae::find($mae);
        $mae->delete();
        flash('Mae Removida com Sucesso!')->success();
        return redirect()->route('admin.maes.index');
    }
}
