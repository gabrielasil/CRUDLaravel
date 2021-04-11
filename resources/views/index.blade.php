@extends('templates.template')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><h1 class="text-left ml-3">Cadastro de Usuários</h1></th>
            </tr>
        </thead>
    </table>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('users/create')}}">
            <button class="btn btn-success">Cadastrar Novo Usuário</button>
        </a>
    </div>
 
    <div>
        @csrf
        <table class="table ml-3 mr-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $users)
                    <tr>
                        <td>{{$users->name}}</td>
                        <td>
                            <a href="{{url("users/$users->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("users/$users->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("users/$users->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>  

    </div>
@endsection
