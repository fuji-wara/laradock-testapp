@extends('layouts.layout')
@section('content')
    {!! Form::model($task,['route' => ['tasks.update',$task->id],'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('content','タスク') !!}
            {!! Form::text('content',null,['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('編集',['class'=> 'btn btn-dark']) !!}
    {!! Form::close() !!}
@endsection