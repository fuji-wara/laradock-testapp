@extends('layouts.layout')
@section('content')
    <div class="card">
        <h5 class="card-header text-white bg-dark">id = {{ $task->id }} のタスク詳細</h5>

        <div class="card-body">
            <h5 class="card-title">あとでタイトル入れる</h5>
            <p class="card-text">{{ $task->content }}</p>
            <br>
            <div class='text-right'>
                {!! link_to_route('tasks.edit','タスクを編集する',['task'=> $task->id],['class' => 'btn btn-dark btn-sm'] )!!} 
                {!! Form::model($task,['route' => ['tasks.destroy',$task->id],'method' => 'delete'])!!}
                    {!! Form::submit('タスクを削除する',['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection