@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-header">
            Завершенные
          </div>
          <ul class="list-group list-group-flush">

            @forelse($complete as $ic)
              <li class="list-group-item">
                {{ $ic->name }} - {{ $ic->user->name }}
              </li>
            @empty
              <li class="list-group-item">
                Нет завершенных задач
              </li>
            @endforelse

          </ul>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">
            В работе
          </div>
          <ul class="list-group list-group-flush">

            @forelse($work as $iw)
              <li class="list-group-item">
                {{ $iw->name }} - {{ $iw->user->name }}
              </li>
            @empty
              <li class="list-group-item">
                Нет рабочих задач
              </li>
            @endforelse

          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
