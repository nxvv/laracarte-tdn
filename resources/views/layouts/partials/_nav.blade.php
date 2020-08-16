<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ set_active_route('home') }}">
          <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ set_active_route('about') }}">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Artisans</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
            <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
            <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
            <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
            <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
            <a class="dropdown-item" href="https://larachat.co">Larachat</a>
          </div>
        </li>
        <li class="nav-item {{ set_active_route('contact.create') }}">
          <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav navbar-right">
        <li class="nav-item ">
            <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="#">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>