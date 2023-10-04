<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Fluxo T93</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">
                    Olá {{ Auth::user()->name }}
                    |
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('adocoes.index') }}">
                        <i class="bi bi-wallet2"></i>
                        adocoes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clientes.index') }}">
                        <i class="bi bi-list-check"></i>
                        Clientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pets.index') }}">
                        <i class="bi bi-list-check"></i>
                        Pets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-right"></i>
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
