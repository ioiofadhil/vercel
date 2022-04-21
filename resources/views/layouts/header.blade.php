<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand"
            style="font-size:30px !important; font-family: Brush Script MT, cursive !important;margin-top:1px; font-weight:lighter !important;"
            href="/"> Ioiofadhil</a>
        <button class="navbar-toggler active" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span style="font-size: 15px" class="active text-white">MENU</span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <a class="nav-link @if ($active === 'home') active @endif" aria-current="page" href="/">Home</a>
                <a class="nav-link @if ($active === 'projects') active @endif" href="/projects">Projects</a>
                <a class="nav-link @if ($active === 'about') active @endif" href="/about">About</a>
                <li class="nav-item dropdown">
                    <a class="nav-link @if ($active === 'crud' || $active === 'link') active @endif dropdown-toggle" href="#"
                        id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Features
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-center"
                        aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="nav-link @if ($active === 'link') active @endif" href="/link"><i
                                    class="bi bi-link"></i> &nbsp;Beauty-waypoint</a></li>
                    </ul>
                </li>
            </div>
            <div class="navbar-nav">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, {{ Auth::user()->username }}!
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <a class="nav-link  @if ($active === 'login') active @endif" href="/login">Login</a>
                    <a class="nav-link  @if ($active === 'register') active @endif" href="/register">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
