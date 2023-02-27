@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Задачи
        <a class="btn btn-outline-success float-end" role="button" aria-disabled="true"
          href="{{ route('tasks.create') }}">Добавить задачу</a>
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
              <th>Приоритет</th>
              <td>{{ $item->priority }}</td>
            </tr>
            <tr>
              <th>Исполнитель</th>
              <td>{{ $item->user->name }}</td>
            </tr>
            <tr>
              <th>Выполнено</th>
              <td>{{ $item->completed }}</td>
            </tr>
            <tr>
              <th class="col-3">Действия</th>
              <td>
                <a class="btn btn-outline-primary ml-1" href="{{ route('tasks.edit', $item->id) }}">Редактировать</a>

                <form action="{{ route('tasks.destroy', $item->id) }}" method="post" class="float-start mr-1">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-outline-danger">Удалить</button>
                </form>
              </td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
