@extends('templates.template')

@section('content')
<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><h1 class="text-left ml-3">Visualizar</h1></th>
            </tr>
        </thead>
    </table>
 
    <div class="col-8 m-auto">
    <table class="table table-hover text-center">
        <tbody>
            <tr>
            <th scope="row">Nome</th>
            <td>{{$user->name}}</td>
            </tr>
            <tr>
            <th scope="row">Email</th>
            <td>{{$user->email}}</td>
            </tr>
            <tr>
            <th scope="row">Senha</th>
            <td colspan="2">{{$user->password}}</td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection
