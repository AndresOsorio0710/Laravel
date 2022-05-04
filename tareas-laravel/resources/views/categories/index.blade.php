@extends('app')

@section('content')
<div class="content-form">
  <div class="form-title"><h2>Nueva Categoria</h2></div>
  <form action="{{ route('categories.store') }}" method="POST">
    @csrf
    @if (session('success'))
      <h6>{{session('success')}}</h6>
    @endif
    @error('name')
      <h6>{{$message}}</h6>
    @enderror
    <div class="form-element">
      <label for="name">Nombre de la categoria</label>
      <input type="text" name="name">
    </div>
    @error('color')
      <h6>{{$message}}</h6>
    @enderror
    <div class="form-element">
      <label for="color">Color de la categoria</label>
      <input type="color" name="color">
    </div>
    <button type="submit">Crear nueva categoria</button>
  </form>
  <div>
    @foreach($categories as $category)
    <div class="task">
      <div class="col-1">
      <a href="{{ route('categories.show', ['category'=>$category->id]) }}">
      <samp style="background-color: {{$category->color}};">º</samp>  {{$category->name}}
      </a>
      </div>
      <div class="col-2">
        <form action="{{ route('categories.destroy', ['category'=>$category->id]) }}" method="POST">
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