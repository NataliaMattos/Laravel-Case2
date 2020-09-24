@extends('layouts.app')

@section('content')
<h1>Atualizar Mae</h1>

<form action="{{route('admin.maes.update', ['mae' => $mae->id])}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label>Nome da Mae </label>
        <input type="text"name="nome" class="form-control"  value="{{$mae->nome}}">
    </div>

    <div class="form-group">
        <label>Endereço</label>
        <input type="text"name="endereço" class="form-control"  value="{{$mae->endereço}}">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text"name="telefone" class="form-control" value="{{$mae->telefone}}">
    </div>

    <div class="form-group">
        <label>Nascimento</label>
        <input type="date"name="datanasc" class="form-control"  value="{{$mae->datanasc}}">
    </div>

   

  

    

    <div>
        <button type="submit" class="btn btn-lg btn-success">Atualizar Mae</button>
    </div>
</form>
@endsection