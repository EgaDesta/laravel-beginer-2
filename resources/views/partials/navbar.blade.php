{{-- <nav class="navbar navbar-expand-lg bg-info-subtle">
    <div class="container">
        <a class="navbar-brand" href="#">Vinxx</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link list-group-item active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link list-group-item active" href="/abaut">Abaut</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link list-group-item active" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link list-group-item active" href="/categories">Category</a>
                </li>
            </ul>
            <ul class="dropdown-menu">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcomeback, {{ auth()->user()->name }}
                </a>
                  <li><a class="dropdown-item" href="#">My Dashboar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
                @else
                <ul class="navbar-nav ms-auto">
                    <li>
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                </ul>
            @endauth

        </div>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-lg bg-info-subtle">
    <div class="container">
        <a class="navbar-brand" href="#">Vinxx</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link list-group-item active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link list-group-item active" href="/abaut">Abaut</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link list-group-item active" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link list-group-item active" href="/categories">Category</a>
                </li>
            </ul>
            @auth
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns"></i> My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a></button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>

