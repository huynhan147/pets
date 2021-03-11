<!doctype html>
<html lang="en">
@include('layouts.header')
<body>
@include('layouts.nav')
<div class="main">
  @yield('content')
</div>
@include('layouts.footer')
</body>
</html>
