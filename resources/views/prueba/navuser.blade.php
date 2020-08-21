<nav class="navbar navbar-light">
  <a href="{{route('prueba.index')}}" class="navbar-brand"><img  id="icono" style="width: 50px;" class="img-responsive" 
    src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"></a>

  <ul class="nav flex-column text-center">
  <li class="nav-item">
    <span class="nav-link active">Bienvenido Jhonatan</span>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    		 @csrf
		</form>
  </li>
</ul>

</nav>


