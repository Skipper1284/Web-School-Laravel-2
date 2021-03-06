@extends('layouts.master')

@section('title')
Вход на сайт
@endsection

@section('content')
@include('includes.header')

<div class='row'>
  <div class='col-md-6'>
    <ul>
      @foreach($errors->all() as $error)

      <li>{{ $error }}</li>

      @endforeach
    </ul>
  </div>
</div>

<center>
  <h1 style="margin-top:80px">Вход</h1>
</center>
<div class='container' style="margin-top:80px;" >
  <div class='row'>
    <div class='col-lg-4 col-lg-offset-4 logp' style="background-color:rgb(51,51,51);" style="margin:10px;" >
      <form action="{{ route('signin') }}" method="post">
        <div class="form-group">
          <label for="username">-</label>
          <input type="text" class="form-control" required placeholder="Имя пользователя" id="username" name="username">
        </div>

       <div class="form-group">
         <label for="pwd">-</label>
         <input type="password" class="form-control" required placeholder="Пароль" id="pwd" name = "password">
       </div>


       <button type="submit" name="button" class="btn btn-default">Войти</button>
       <input type='hidden' name="_token" value="{{ Session::token() }}">
       <a href='/signup'><h6 style='text-align:center;'>Зарегистрироваться</h6></a>
      </form>
    </div>
  </div>
</div>


@endsection
