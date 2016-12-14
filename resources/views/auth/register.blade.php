@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-4 offset-md-4">
    <div class="card card-block mt-3">
      <h4 class="card-title mb-2">Регистрация</h4>
      <form method="post" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <input class="form-control" name="name" placeholder="Имя" />
        </div>
        <div class="form-group">
          <input class="form-control" name="email" type="email" placeholder="Email" />
        </div>
        <div class="form-group">
          <input class="form-control" name="password" type="password" placeholder="Пароль" />
        </div>
        <div class="form-group">
          <input class="form-control" name="password_confirmation" type="password" placeholder="Еще раз пароль" />
        </div>
        <div class="form-group">
          <button class="btn btn-primary">Зарегистрироваться</button>
          <a href="{{ url('/login') }}" class="float-xs-right small">Есть аккаунт?</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
