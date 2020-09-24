@extends('layouts.app')

@section('content')
<h1>Criar Bebe</h1>

<form action="{{route('admin.bebes.store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label>Nome do Bebe </label>
        <input type="text"name="nome" class="form-control">
    </div>

    <div class="form-group">
        <label>Nascimento</label>
        <input type="date"name="datanasc" class="form-control">
    </div>

    <div class="form-group">
        <label>Peso</label>
        <input type="text"name="peso" class="form-control">
    </div>

    <div class="form-group">
        <label>Altura</label>
        <input type="text"name="altura" class="form-control" >
    </div>

  

    <div class="form-group">
        <label>Mae</label>
        <select name="mae" class="form-control">
        @foreach($maes as $mae)
        <option value="{{$mae->id}}">{{$mae->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Medico</label>
        <select name="medico" class="form-control">
        @foreach($medicos as $medico)
        <option value="{{$medico->id}}">{{$medico->name}}</option>
        @endforeach
        </select>
    </div>


    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Bebe</button>
    </div>
</form>

@endsection