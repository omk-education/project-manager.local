@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Редактирование проекта
      </h5>
      <div class="card-body">

        <form action="{{ route('projects.update', $item->id) }}" method="post">
          @csrf
          @method('put')
          @include('projects.partials.form')
        </form>

      </div>
    </div>
  </div>
@endsection
