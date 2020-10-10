@extends('layout')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">{{$task->title}}</h1>
            <p class="lead">
                {{$task->body}}
            </p>
            <hr class="my-4">
            <p>Dis you done this task?</p>
            <hr>
            <div class="text-center">
                <span class="h5">Created at: {{$task->created_at}}</span>
                <br>
                <span class="h5">Updated at: {{$task->updated_at}}</span>
            </div>
            <a class="btn btn-primary btn-lg" href="/tasks/completed/{{$task->id}}" role="button">YES!</a>
            <a class="btn btn-warning btn-lg" href="/" role="button">No!</a>
        </div>
    </div>
@endsection

