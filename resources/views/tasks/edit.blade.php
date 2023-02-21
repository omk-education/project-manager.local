@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Редактирование задачи
      </h5>
      <div class="card-body">

        <form action="{{ route('tasks.update', $item->id) }}" method="post">
          @csrf
          @method('put')
          @include('tasks.partials.form')
        </form>

      </div>
    </div>
  </div>
@endsection
