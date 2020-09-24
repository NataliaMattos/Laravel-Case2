@extends('layouts.app')

@section('content')
<a href="{{route('admin.bebes.create')}}" class="btn btn-lg btn-success">Criar Bebes</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Mae</th>
                <th>Medico</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bebes as $b)
        <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->nome}}</td>
                <td>{{$b->datanasc}}</td>
                <td>{{$b->peso}}</td>
                <td>{{$b->altura}}</td>
                <td>{{$b->mae_id}}</td>
                <td>{{$b->medico_id}}</td>
                <td>
              <div class="btn-group">
              <a href="{{route('admin.bebes.edit',['bebe' => $b->id])}}" class="btn btn-sm btn-primary">Editar</a>
                  <form action="{{route('admin.bebes.destroy',['bebe' => $b->id])}}" method="post">
                    @csrf
                    @method("DELETE")
                  <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                  </form>
                  </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>    
                    

    {{$bebes->links()}}
@endsection


