<header class="container my-3">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" aria-current="page" href="{{ route('home') }}">
        Home
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link  {{(Route::currentRouteName() === 'travels') ? 'active' : ''}}" href="{{ route('travels') }}">
        Viaggi
      </a>
    </li>
  </ul>
</header>