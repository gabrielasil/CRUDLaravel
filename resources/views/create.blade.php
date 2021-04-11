@extends('templates.template')

@section('content')
<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><h1 class="text-left ml-3">@if(isset($user))Editar @else Cadastrar @endif</h1></th>
            </tr>
        </thead>
    </table>
 
    <div class="col-8 m-auto">
        
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}} <br>
                @endforeach
            </div>
        @endif
        
        @if(isset($user))
            <form name="formEdit" id="formEdit" method="post" action="{{url("users/$user->id")}}">
                @method('PUT')
        @else
        <form name="formCad" id="formCad" method="post" action="{{url('users')}}">
        @endif
        
            @csrf 
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome" value="{{$user->name ?? ''}}" required> <br>
            <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="{{$user->email ?? ''}}" required> <br>
            <input class="form-control" type="password" name="password" id="password" placeholder="Senha" required> <br>
            <input class="btn btn-primary" type="submit" value="@if(isset($user))Editar @else Cadastrar @endif">
        </form>
    </div>
@endsection