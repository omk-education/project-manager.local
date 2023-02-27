@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Добавить пользователя
      </h5>
      <div class="card-body">

        <form action="{{ route('users.store') }}" method="post">
          @csrf
          @include('users.partials.form')
        </form>

      </div>
    </div>
  </div>
@endsection
