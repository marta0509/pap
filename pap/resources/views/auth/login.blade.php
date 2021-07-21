
<!------ Include the above in your HEAD tag ---------->
@extends('layout')
@section('titulo-pagina')
Login
@endsection
@section('header')

@endsection
@section('conteudo')



    <div class="row margem-top">
      <div class="col-md-4"></div>
        <div class="col-md-4  login">
            <h1 class="text-center"><i class="glyphicon glyphicon-user"></i> Login</h1>
            <hr>
            <form action="{{route('login')}}" method="post">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              
                <div>
                  
                  <div class="btn-group" role="group" style="align-items: left">
                    <button type="submit" class="btn btn-primary" style="background-color: orange">Login</button>
                  </div>

                  <div class="btn-group" role="group" style="align-items: right">
                    <a href="{{asset('register')}}" class="btn btn-primary" style="background-color: orange">Register</a>
                  </div>

                </div>
            </form>
            <hr>
        </div>
    </div>

@endsection