@extends('admin/base')

@section('title', 'Admin - Users')

@section('admin-breadcrumb')
  <a href="{{ route('admin.user') }}">Usuarios/</a>
@endsection

@section('admin-content')
<div class="container">
  <div class="panel">
    <div class="panel-header">
      <h2>Usuarios</h2>
    </div>
    <div class="panel-inside">
      <a href="{{ route('admin.user.add') }}" class="btn-sm" title="Add a new User">+ New User</a>
      <form class="search mtop-16">
        <input type="text" name="search" id="search" placeholder="Search" />
        <button type="submit" class="btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z"/>
            <path d="M11.412,8.586C11.791,8.966,12,9.468,12,10h2c0-1.065-0.416-2.069-1.174-2.828c-1.514-1.512-4.139-1.512-5.652,0 l1.412,1.416C9.346,7.83,10.656,7.832,11.412,8.586z"/>
          </svg>
        </button>
      </form>
      <table class="mtop-16">
        <thead>
          <tr>
            <th class="text-left">User Name</th>
            <th class="text-left">User Role</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ strtoupper($user->name) }}</td>
            <td>{{ strtoupper($user->role) }}</td>
            <td class="text-right">
              <a href="#" class="btn-sm" title="Modify this User">Edit</a>
              <a href="#" class="btn-sm" title="Delete this User">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>    
  </div>  
</div>
@endsection