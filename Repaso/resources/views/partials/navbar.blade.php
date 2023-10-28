<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Noticia Literaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apodoPrincipal')?'text-danger':''}}" aria-current="page" href="/">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apodoRegistro')?'text-danger':''}}" href="{{route('apodoRegistro')}}">Registro</a> 
        </li>
        <li class="nav-item dropdown">
          
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Nombre</a></li>
            <li><a class="dropdown-item" href="#">Biblioteca</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Copyright</a></li>
          </ul>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>