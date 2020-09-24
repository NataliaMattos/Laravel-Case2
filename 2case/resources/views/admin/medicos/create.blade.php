@extends('layouts.app')

@section('content')
<h1>Criar Medico</h1>

<form action="{{route('admin.medicos.store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label>Nome do Medico </label>
        <input type="text"name="nome" class="form-control">
    </div>

    <div class="form-group">
        <label>crm</label>
        <input type="text"name="crm" class="form-control">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text"name="telefone" class="form-control">
    </div>

    <div class="form-group">
        <label>Especialidade</label>
        <input type="text" name="especialidade" class="form-control" >
    </div>



    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Medico</button>
    </div>
</form>

@endsection