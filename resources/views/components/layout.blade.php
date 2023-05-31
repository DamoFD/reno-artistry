<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reno Artistry</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!--start #header-->
    <header id="header" class="header_main">
      <!--Primary Navigation-->
      <nav class="navbar">
        <a href="/reno-artistry/public">
          <img
            src="{{ asset('images/reno-artistry-logo.webp') }}"
            class="header-img"
          />
        </a>
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="nav no-search">

          @auth
          <li class="nav-item">
            <p>
              Welcome {{ auth()->user()->name }}
            </p>
            </li>
            <li class="nav-item">
              <a class="" href="/reno-artistry/public/posts/manage">
                Manage Listings
              </a>
            </li>
            <li class="nav-item">
              <form method="POST" action="/reno-artistry/public/logout">
                @csrf
                <button type="submit">Logout</button>
              </form>
            </li>

            @else
            <li class="nav-item">
              <a class="" href="/reno-artistry/public/register">
                Register
              </a>
            </li>
            <li class="nav-item">
              <a href="/reno-artistry/public/login">
                Login
              </a>
            </li>
            @endauth
        </ul>
      </nav>
      <!--!Primary Navigation-->
    </header>
    <!--!start #header-->
    <main>
    {{ $slot }}
</main>

<x-flash-message />

<!-- Custom JS -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- Alpine JS -->
<script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>