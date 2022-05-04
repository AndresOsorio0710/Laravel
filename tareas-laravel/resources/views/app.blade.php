<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mista tareas</title>
</head>

<body>
  <div>
    <nav class="top-bar">
      <div>
        <h1>
        <a href="#">
          Mis Tareas
        </a></h1>
      </div>
      <ul>
        <li><a href="{{ route('tareas') }}">Tareas</a></li>
        <li><a href="#">Categorias</a></li>
      </ul>
    </nav>
  </div>
  @yield('content')
</body>

</html>