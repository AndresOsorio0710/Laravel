@extends('app')

@section('content')
<div class="content-form">
  <div class="form-title"><h2>Nueva tarea</h2></div>
  <form action="{{ route('tareas-update',['id' => $tarea->id]) }}" method="POST">
    @method('PATCH')
    @csrf
    @if (session('success'))
      <h6>{{session('success')}}</h6>
    @endif
    @error('title')
      <h6>{{$message}}</h6>
    @enderror
    <div class="form-element">
      <label for="title">Título de la tarea</label>
      <input type="text" name="title" value="{{ $tarea->title }}">
    </div>
    <button type="submit">Actualizar tarea</button>
  </form>
</div>
@endsection