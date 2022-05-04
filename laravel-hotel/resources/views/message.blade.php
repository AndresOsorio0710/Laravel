@if (Session::has('message'))
  @if ($errors->any())
  <div class="notification notification-{{ Session::get('typealert') }}" style="animation-duration: {{ count($errors)+5}}s">
    {{ Session::get('message') }}
    @foreach ( $errors->all() as $error )
      <li>{{ $error }}</li>
    @endforeach
  </div>
  @else
    <div class="notification notification-{{ Session::get('typealert') }}">
      {{ Session::get('message') }}
    </div>
  @endif
@endif