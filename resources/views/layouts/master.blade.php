<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>

  <body>
    <h2>Komunitas Peduli Lingkungan</h2>

    @include('layouts.header')

    <br>

    <div class="content">
      @yield('content')
    </div>

    <br>
    <hr>

    @include('layouts.footer')

  </body>
</html>
