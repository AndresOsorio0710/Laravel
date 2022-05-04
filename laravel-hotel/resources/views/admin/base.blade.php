@extends('master')

@section('css')
<link rel="stylesheet" href="{{ url('/static/css/admin.css?v=' . time()) }}">
@endsection

@section('content')
<div class="row">
  <div class="col-2">
    <div class="sidebar">
      <div class="sidebar-menu-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
        </svg>
        <div class="sidebar-head">
          <div class="title"><h2>My Hotel</h2></div>
          <small>{{ auth()->user()->name }} <br />{{ auth()->user()->email }} <br /><a href="{{ route('login.destroy') }}">Log Out</a></small>
        </div>
        <div class="sidebar-body">
          <div class="sidebar-body-menu">
            <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.user') }}">Users</a></li>
            <li><a href="">Hotels</a></li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-10">
    <div class="page">
      <nav class="nav-breadcrumb">
        <a href="{{ route('admin.home') }}">Dashboard/</a>
        @yield('admin-breadcrumb')
      </nav>
      @yield('admin-content')
    </div>
  </div>
</div>
@endsection