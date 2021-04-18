<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@extends('layout')
@section('titulo-pagina')
Registre-se
@endsection
@section('header')
<br>
@endsection
@section('conteudo')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 login">
            <h1 class="text-center"><i class="glyphicon glyphicon-user"></i> Registro</h1>
            <hr>
            <form action="{{route('register')}}" method="post">
                @csrf
              <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                @error('name')
                   <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                  </span>
                @enderror

              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" placeholder="Email">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Password">
                @error('password')
                 <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
               @enderror
              </div>

              <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password-confirm" placeholder="Password">
              
              </div>
              <div class="btn-group" role="group">
                   <button type="submit" class="btn btn-primary">Criar Registo</button>
              </div>
             </div>
            </form>
            <hr>
        </div>
    </div>
</div>
@endsection