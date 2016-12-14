@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
  <div class="col-md-4 offset-md-4">
    <div class="card card-block mt-3">
      <h4 class="card-title mb-2">Восстановление</h4>
      <form method="post" action="{{ url('/password/email') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <input class="form-control" name="email" type="email" placeholder="Email" />
        </div>
        <div class="form-group">
          <button class="btn btn-primary">Продолжить</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
