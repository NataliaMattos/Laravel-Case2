@extends('layouts.app')

@section('content')
<a href="{{route('admin.maes.create')}}" class="btn btn-lg btn-success">Criar Mae</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>endereco</th>
                <th>telefone</th>
                <th>nascimento</th>
            </tr>
        </thead>
        <tbody>
        @foreach($maes as $m)
        <tr>
                <td>{{$m->id}}</td>
                <td>{{$m->nome}}</td>
                <td>{{$m->endereço}}</td>
                <td>{{$m->telefone}}</td>
                <td>{{$m->datanasc}}</td>
                <td>
                <div class="btn-group">
              <a href="{{route('admin.maes.edit',['mae' => $m->id])}}" class="btn btn-sm btn-primary">Editar</a>
                  <form action="{{route('admin.maes.destroy',['mae' => $m->id])}}" method="post">
                    @csrf
                    @method("DELETE")
                  <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                  </form>
                  </div>
        @endforeach
        </tbody>
    </table>    
    {{$maes->links()}}
@endsection
                    



