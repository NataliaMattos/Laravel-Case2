@extends('layouts.app')

@section('content')
<h1>Criar Mae</h1>

<form action="{{route('admin.maes.store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label>Nome da Mae</label>
        <input type="text"name="nome" class="form-control">
    </div>

    <div class="form-group">
        <label>endereco</label>
        <input type="text"name="endereço" class="form-control">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text"name="telefone" class="form-control">
    </div>

    <div class="form-group">
        <label>nascimento</label>
        <input type="date"name="datanasc" class="form-control" >
    </div>

   

    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Mae</button>
    </div>
</form>

@endsection