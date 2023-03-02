@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Добавить проект
      </h5>
      <div class="card-body">

        <form action="{{ route('projects.store') }}" method="post">
          @csrf
          @include('projects.partials.form')
        </form>

      </div>
    </div>
  </div>
@endsection
