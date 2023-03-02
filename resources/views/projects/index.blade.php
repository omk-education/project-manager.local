@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Проекты
        <a class="btn btn-outline-success float-end" role="button" aria-disabled="true"
          href="{{ route('projects.create') }}">
          Добавить проект
        </a>
      </h5>
      <div class="card-body">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>№</th>
              <th>Название</th>
              <th>Разработчик</th>
              <th>Бюджет</th>
              <th>Дата начала</th>
              <th class="col-3">Действия</th>
            </tr>

          </thead>
          <tbody>
            @forelse ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->budget }}</td>
                <td>{{ $item->start }}</td>
                <td>
                  <a class="btn btn-outline-primary float-end mr-1"
                    href="{{ route('projects.edit', $item->id) }}">Редактировать</a>
                  <a class="btn btn-outline-secondary float-end mr-1"
                    href="{{ route('projects.show', $item->id) }}">Задачи</a>

                  <form action="{{ route('projects.destroy', $item->id) }}" method="post" class="float-end">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger">Удалить</button>
                  </form>

                </td>
              </tr>
            @empty
            @endforelse
          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
