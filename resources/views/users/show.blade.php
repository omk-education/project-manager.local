@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">
        Пользователи
        <a class="btn btn-outline-success float-end" role="button" aria-disabled="true"
          href="{{ route('users.create') }}">Добавить пользователя</a>
      </h5>
      <div class="card-body">

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>№</th>
              <td>{{ $item->id }}</td>
            </tr>
            <tr>
              <th>Имя пользователя</th>
              <td>{{ $item->name }}</td>
            </tr>
            <tr>
              <th>Роль</th>
              <td>{{ $item->role }}</td>
            </tr>

            <tr>
              <th class="col-3">Действия</th>
              <td>
                <a class="btn btn-outline-primary ml-1" href="{{ route('users.edit', $item->id) }}">Редактировать</a>

                <form action="{{ route('users.destroy', $item->id) }}" method="post" class="float-start mr-1">
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
