@extends('layouts.layout')
@section('content')
    @if(count($tasks)>0)
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">task</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    @endif
@endsection