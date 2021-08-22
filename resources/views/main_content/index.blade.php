@extends('layouts.layout')
@section('content')
    @if(count($tasks)>0)
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">task</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <th scope="row">{!! link_to_route('tasks.show',$task->id,['task' => $task->id ])!!}</th>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create','新規タスクを追加',[],['class' => 'btn btn-dark'])!!}
@endsection