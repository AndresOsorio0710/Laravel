@extends('connect/base')

@section('title', 'Register')

@section('content')
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
    <form method="POST" class="form box-shadow">
      @csrf
      <label for="title" class="title">Register</label>
      <input type="text" placeholder="your User Name" id="name" name="name" required>
      <input type="text" placeholder="your First Name?" id="first_name" name="first_name" required>
      <input type="text" placeholder="your Last Name?" id="last_name" name="last_name" required>
      <input type="email" placeholder="your Email?" id="email" name="email" required>
      <input type="text" placeholder="your Phone Number?" id="phone_number" name="phone_number" required>
      <input type="password" placeholder="your Password" id="password" name="password" required>
      <input type="password" placeholder="your Password" id="password_confirmation" name="password_confirmation" required>
      <input type="submit" class="btn" value="Register">
    </form>
    @include('message')
  </div>
  <div class="col-3"></div>
</div>
@endsection