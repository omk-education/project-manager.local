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
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Приоритет</th>
                        <th>Исполнитель</th>
                        <th>Выполнено</th>
                        <th class="col-3">Действия</th>
                    </tr>

                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->priority }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->completed }}</td>
                        <td>
                            <a class="btn btn-outline-primary float-end mr-1"
                                href="{{ route('tasks.edit', $item->id) }}">Редактировать</a>
                            <a class="btn btn-outline-secondary float-end mr-1"
                                href="{{ route('tasks.show', $item->id) }}">Детали</a>

                            <form action="{{ route('tasks.destroy', $item->id) }}" method="post" class="float-end">
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