<header class="header">
  <div class="container">
    <div class="logo">
      <a href="{{ route('home') }}">Hotel</a>
    </div>
    <nav class="menu">
      @if (auth()->check())
        <a href="{{ route('login.destroy') }}">Log Out</a>
        @if(auth()->user()->role=="ADMINISTRATOR")
          <a href="{{ route('admin.home') }}">Admin</a>
        @endif
      @else
        <a href="{{ route('login.index') }}">log In</a>
        <a href="{{ route('register.index') }}">Register</a>
      @endif
    </nav>
  </div>
</header>