
<!------ Include the above in your HEAD tag ---------->
@extends('layout')
@section('titulo-pagina')
Registe-se
@endsection
@section('header')
<br>
@endsection
@section('conteudo')

<div class="row margem-top">
  <div class="col-md-4"></div>
        <div class="col-md-4 login">
            <h1 class="text-center"><i class="glyphicon glyphicon-user"></i> Register</h1>
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
                   <button type="submit" class="btn btn-primary" style="background-color: orange">Criar Registo</button>

              </div>
             </div>
            </form>
            <hr>
        </div>
</div>
@endsection