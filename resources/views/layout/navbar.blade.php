<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/" aria-disabled="true">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('one-to-one') ? 'active fw-bold' : '' }}" href="{{ url('/one-to-one') }}" aria-current="page" >One to One</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ request()->is('one-to-many') ? 'active fw-bold' : '' }}" href="{{ url('/one-to-many') }}">One to Many</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ request()->is('many-to-many') ? 'active fw-bold' : '' }}" href="{{ url('/many-to-many') }}">many to Many</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
