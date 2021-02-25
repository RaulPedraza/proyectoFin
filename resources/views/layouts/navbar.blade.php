
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="" height="30" class="d-inline-block align-top" alt="">
            Escuela de hosteleria
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                @if($user == 2)
                    <li class="nav-item">
                        <a class="nav-link" href="/pedidos">Pedidos</a>
                    </li>
                @endif
                @if($user != 2 && $user != "")
                    <li class="nav-item">
                        <a class="nav-link" href="/pedidosUser">Mis Pedidos</a>
                    </li>
                @endif
            </ul>
        </div>
        @if($user == "")
            <a href="/login" id="bLogin"class="btn btn-outline-success">Iniciar sesion</a>
        @else
            <a href="/logout" id="bLogout" class="btn btn-outline-warning">Cerrar sesion</a>
        @endif
    </nav>

