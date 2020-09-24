@extends('layouts.app')

@section('content')
<a href="{{route('admin.medicos.create')}}" class="btn btn-lg btn-success">Criar Medicos</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>crm</th>
                <th>telefone</th>
                <th>especialidade</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicos as $m)
        <tr>
                <td>{{$m->id}}</td>
                <td>{{$m->nome}}</td>
                <td>{{$m->crm}}</td>
                <td>{{$m->telefone}}</td>
                <td>{{$m->especialidade}}</td>
                <td>
              <div class="btn-group">
              <a href="{{route('admin.medicos.edit',['medico' => $m->id])}}" class="btn btn-sm btn-primary">Editar</a>
                  <form action="{{route('admin.medicos.destroy',['medico' => $m->id])}}" method="post">
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
                    

    {{$medicos->links()}}
@endsection


