@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" enctype="multipart/form-data" action="/tareas ">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tarea</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Archivos adjuntos</label>
        <input type="file" name="adjunto" id="files">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection