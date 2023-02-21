@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">
            Добавить задачу
        </h5>
        <div class="card-body">

            <form action="{{ route('tasks.store') }}" method="post">
                @csrf
                @include('tasks.partials.form')
            </form>

        </div>
    </div>
</div>
@endsection