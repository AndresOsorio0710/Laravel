@extends('app')

@section('content')
<div class="content-form">
  <div class="form-title"><h2>Nueva tarea</h2></div>
  <form action="{{ route('tareas') }}" method="POST">
    @csrf
    @if (session('success'))
      <h6>{{session('success')}}</h6>
    @endif
    @error('title')
      <h6>{{$message}}</h6>
    @enderror
    <div class="form-element">
      <label for="title">Título de la tarea</label>
      <input type="text" name="title">
    </div>
    <button type="submit">Crear nueva tarea</button>
  </form>
  <div>
    @foreach($tareas as $tarea)
    <div>
      <a href="">{{$tarea->title}}</a>
    </div>
    @endforeach
  </div>
</div>
@endsection