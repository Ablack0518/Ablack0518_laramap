<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('laramap-path') }}">LaraMap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <em class="d-flex em-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ setActiveClass('root_path') }}" href="{{ route('root_path') }}">AppTest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-pills {{ setActiveClass('laramap-path') }}" aria-current="page" href="{{ route('laramap-path') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActiveClass('laramap_about') }}" href="{{ route('laramap_about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artisans</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Planet
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://laravel.com">Laravel.com</a></li>
                            <li><a class="dropdown-item" href="https://www.laravel.io">Laravel.io</a></li>
                            <li><a class="dropdown-item" href="https://www.laracasts.com">Laracasts</a></li>
                            <li><a class="dropdown-item" href="https://www.larajobs.com">Larajobs</a></li>
                            <li><a class="dropdown-item" href="https://www.laravel-news.com">Laravel News</a></li>
                            <li><a class="dropdown-item" href="https://www.larachat.com">Larachat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActiveClass('laramap_contact') }} " href="{{ route('laramap_contact') }}">Contact-us</a>
                    </li>
                </em>
            </ul>
            <ul class="nav navbar-nav ">
                <em class="d-flex em-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </em>
            </ul>
            <form class="d-flex">

            </form>
        </div>
    </div>
</nav>
