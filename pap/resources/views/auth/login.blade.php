<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@extends('layout')
@section('titulo-pagina')
Login
@endsection
@section('header')
<br><p style="color: red">Viste-nos</p>
@endsection
@section('conteudo')
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 login">
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
</div>
@endsection