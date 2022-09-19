@extends('layouts.app')
@section('title','ToDos')
@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($todos as $todo)
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">

                        <h5 class="card-title">{{$todo->title}}</h5>
                        <p class="card-text">{{$todo->description}}</p>
                        <a href="/todos/{{$todo->id}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
        
@endsection

