@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Редактирование пользователя
      </h5>
      <div class="card-body">

        <form action="{{ route('users.update', $item->id) }}" method="post">
          @csrf
          @method('put')
          @include('users.partials.form')
        </form>

      </div>
    </div>
  </div>
@endsection
