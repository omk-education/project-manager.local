@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Пользователи
        <a class="btn btn-outline-success float-end" href="{{ route('users.create') }}">Добавить пользователя</a>
      </h5>
      <div class="card-body">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>№</th>
              <th>Имя</th>
              <th>E-mail</th>
              <th>Роль</th>
              <th class="col-3">Действия</th>
            </tr>

          </thead>
          <tbody>
            @forelse ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->role }}</td>
                <td>
                  <a class="btn btn-outline-primary float-end mr-1"
                    href="{{ route('users.edit', $item->id) }}">Редактировать</a>
                  <a class="btn btn-outline-secondary float-end mr-1"
                    href="{{ route('users.show', $item->id) }}">Детали</a>

                  <form action="{{ route('users.destroy', $item->id) }}" method="post" class="float-end">
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
