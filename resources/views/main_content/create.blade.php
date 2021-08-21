@extends('layouts.layout')
@section('content')

    <h1>新規タスク追加ページ</h1>
    {!! Form::model($task,['route' => 'tasks.store']) !!}

        <div class="form-group">
        {!! Form::label('content','タスク') !!}
        {!! Form::text('content',null,['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('作成',['class'=> 'btn btn-dark']) !!}
    {!! Form::close() !!}
@endsection


