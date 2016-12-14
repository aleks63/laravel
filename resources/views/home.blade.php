@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card card-block text-xs-center mt-3">
    <h1 class="display-4 text-muted">Welcome, {{ Auth::user()->name }}</h1>
  </div>
</div>
@endsection
