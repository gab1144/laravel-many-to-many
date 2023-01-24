<header>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <div class="logo_laravel">
                    <img src="{{ Vite::asset('resources/img/logo-black.svg') }}" alt="Logo GR" class="logo">

                </div>
                {{-- config('app.name', 'Laravel') --}}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="{{url('/') }}"><i class="fa-solid fa-globe"></i> Vedi il sito</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <form  action="{{route('admin.projects.index')}}" method="GET">
                            @csrf
                            <input class="form-control d-inline-block w-50" name="search" type="text" placeholder="Cosa cerchi?">
                            <button class="btn btn-primary" type="submit">Cerca per titolo</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
