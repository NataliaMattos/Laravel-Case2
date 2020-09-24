@extends('layouts.app')

@section('content')
<h1>Atualizar Bebe</h1>

<form action="{{route('admin.bebes.update', ['bebe' => $bebe->id])}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label>Nome do Bebe </label>
        <input type="text"name="nome" class="form-control"  value="{{$bebe->nome}}">
    </div>

    <div class="form-group">
        <label>Nascimento</label>
        <input type="date"name="datanasc" class="form-control"  value="{{$bebe->datanasc}}">
    </div>

    <div class="form-group">
        <label>Peso</label>
        <input type="text"name="peso" class="form-control"  value="{{$bebe->peso}}">
    </div>

    <div class="form-group">
        <label>Altura</label>
        <input type="text"name="altura" class="form-control" value="{{$bebe->altura}}">
    </div>

  

    

    <div>
        <button type="submit" class="btn btn-lg btn-success">Atualizar Bebe</button>
    </div>
</form>
@endsection