@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-4 offset-md-4">
    <div class="card card-block mt-3">
      <h4 class="card-title mb-2">Авторизация</h4>
      <form method="post" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <input class="form-control" name="email" type="email" placeholder="Email" />
        </div>
        <div class="form-group">
          <input class="form-control" name="password" type="password" placeholder="Пароль" />
        </div>
        <div class="form-group">
          <button class="btn btn-primary">Войти в систему</button>
          <a href="{{ url('/password/reset') }}" class="float-xs-right small">Забыли пароль?</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
