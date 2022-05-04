@extends('admin/base')

@section('title', 'Admin - Users')

@section('admin-breadcrumb')
  <a href="{{ route('admin.user') }}">Usuarios/</a>
  <a href="{{ route('admin.user.add') }}">New User/</a>
@endsection
@section('admin-content')
<div class="container">
  <div class="panel">
    <div class="panel-header">
      <h2>New User</h2>
    </div>
    <div class="panel-inside">
      
        <div class="row">
          <div class="col-6">
            <form method="POST" class="form box-shadow">
              <input type="text" placeholder="your First Name?" id="first_name" name="first_name" required>
              <input type="text" placeholder="your Last Name?" id="last_name" name="last_name" required>
              <input type="email" placeholder="your Email?" id="email" name="email" required>
              <input type="text" placeholder="your Phone Number?" id="phone_number" name="phone_number">
              <input type="text" placeholder="your Phone Number?" id="phone_number" name="phone_number"required>   
              <input type="text" placeholder="your Phone Number?" id="phone_number" name="phone_number"required> 
            </form>
          </div>
          <div class="col-6">

          </div>
        </div>
    </div>    
  </div>  
</div>
@endsection