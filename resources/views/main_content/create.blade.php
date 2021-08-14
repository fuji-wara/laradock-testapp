@extends('layouts.layout')
@section('content')
    <h1>新規タスク追加ページ</h1>
    <form　method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">タスク名</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

