@extends('connect/base')

@section('title', 'Log In')

@section('content')
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
    <form method="POST" class="form box-shadow">
      @csrf
      <label for="title" class="title">Log In</label>
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="your User or Email" id="user" name="user" required>
        </div>
        <div class="col-6">
          <input type="password" placeholder="your Password" id="password" name="password" required>
        </div>
      </div>    
      <input type="submit" class="btn" value="Log In">
    </form>
    @include('message')
  </div>
  <div class="col-3"></div>
</div>
@endsection