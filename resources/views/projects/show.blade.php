@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Задачи
      </h5>
      <div class="card-body">

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>№</th>
              <td>{{ $item->id }}</td>
            </tr>
            <tr>
              <th>Название</th>
              <td>{{ $item->name }}</td>
            </tr>
            <tr>
              <th>Описание</th>
              <td>{{ $item->description }}</td>
            </tr>
            <tr>
              <th>Бюджет проекта</th>
              <td>{{ $item->budget }}</td>
            </tr>
            <tr>
              <th>Ведущий разработчик</th>
              <td>{{ $item->user->name }}</td>
            </tr>
            <tr>
              <th>Дата начала проекта</th>
              <td>{{ $item->start }}</td>
            </tr>
            <tr>
              <th class="col-3">Действия</th>
              <td>
                <a class="btn btn-outline-primary ml-1" href="{{ route('tasks.edit', $item->id) }}">Редактировать</a>
              </td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
