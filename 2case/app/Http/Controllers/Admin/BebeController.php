<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bebe;

class BebeController extends Controller
{

//    private $bebe;
//    public function _construct(Bebe $bebe){
//        $this->bebe = $bebe;
//    }

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $bebes = \App\Bebe::paginate(7);;
        return view('admin.bebes.index', compact('bebes'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $maes = \App\Mae::all(['id','nome']);
        $medicos = \App\Medico::all(['id','nome']);
        return view('admin.bebes.create', compact('maes','medicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bebe $bebe)
    {
        $data = $request->all();
        $mae = \App\Mae::find($data['mae']);
        $medico = \App\Medico::find($data['medico']);
        $mae->bebe()->create($data); 
        $medico->bebe()->create($data);
        flash('Bebe Criado com Sucesso!')->success();
        return redirect()->route('admin.bebes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $bebe
     * @return \Illuminate\Http\Response
     */
    public function show($bebe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $bebe
     * @return \Illuminate\Http\Response
     */
    public function edit($bebe)
    {
        $bebe = \App\Bebe::find($bebe);
        return view('admin.bebes.edit', compact('bebe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $bebe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bebe)
    {
        $data = $request->all();
        $bebe = \App\Bebe::find($bebe);
        $bebe->update($data);
        flash('Bebe Atualizado com Sucesso!')->success();
        return redirect()->route('admin.bebes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $bebe
     * @return \Illuminate\Http\Response
     */
    public function destroy($bebe)
    {
        $bebe = \App\Bebe::find($bebe);
        $bebe->delete();
        flash('Bebe Removido com Sucesso!')->success();
        return redirect()->route('admin.bebes.index');
    }
}
