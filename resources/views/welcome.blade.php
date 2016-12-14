@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card card-block text-xs-center mt-3">
    <a href="{{ url('/register') }}" class="btn btn-primary">Зарегистрироваться</a>
    <a href="{{ url('/login') }}" class="btn btn-secondary">Войти</a>
  </div>
</div>
@endsection
