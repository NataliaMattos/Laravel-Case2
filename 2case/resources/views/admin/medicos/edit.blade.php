@extends('layouts.app')

@section('content')
<h1>Atualizar Medico</h1>

<form action="{{route('admin.medicos.update', ['medico' => $medico->id])}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label>Nome do Medico </label>
        <input type="text"name="nome" class="form-control" value="{{$medico->nome}}">
    </div>

    <div class="form-group">
        <label>crm</label>
        <input type="text"name="crm" class="form-control" value="{{$medico->crm}}">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text"name="telefone" class="form-control" value="{{$medico->telefone}}">
    </div>

    <div class="form-group">
        <label>Especialidade</label>
        <input type="text" name="especialidade" class="form-control" value="{{$medico->especialidade}}" >
    </div>

  

    

    <div>
        <button type="submit" class="btn btn-lg btn-success">Atualizar Medico</button>
    </div>
</form>
@endsection