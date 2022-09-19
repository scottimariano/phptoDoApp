@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
          TODO DETAIL
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$todo->title}}</h5>
          <p class="card-text">{{$todo->description}}</p>
          <a href="#" class="btn btn-primary">COMPLETED</a>
          <a href="#" class="btn btn-primary">EDIT</a>
          <form action="/todos/{{$todo->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger"value="DELETE">
          </form>
        </div>

      </div>
</div>
        
@endsection

