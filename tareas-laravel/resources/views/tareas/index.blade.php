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
    <div class="task">
      <div class="col-1">
      <a href="{{ route('tareas-show', ['id'=>$tarea->id]) }}">{{$tarea->title}}</a>
      </div>
      <div class="col-2">
        <form action="{{ route('tareas-destroy', ['id'=>$tarea->id]) }}" method="POST">
          @method('DELETE')
          @csrf
          <button>Eliminar</button>
        </form>
      </div>      
    </div>
    @endforeach
  </div>
</div>
@endsection