<nav class="navbar navbar-expand-md bg-white shadow-sm" style="border-radius:0 0 12px 12px ;background-color: blue !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: whitesmoke !important; font-weight:700;font-size:1.7em;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;margin-left:-79px;">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color: whitesmoke !important; font-weight:600">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" style="color: whitesmoke !important; font-weight:600">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('menu') }}" style="color: whitesmoke !important; font-weight:600;border-bottom:{{ Request::routeIs('menu') ? '1px solid whitesmoke' : '' }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('menuabout') }}" style="color: whitesmoke !important; font-weight:600;border-bottom:{{ Request::routeIs('menuabout') ? '1px solid whitesmoke' : '' }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('menuservice') }}" style="color: whitesmoke !important; font-weight:600;border-bottom:{{ Request::routeIs('menuservice') ? '1px solid whitesmoke' : '' }}">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('menuproject') }}" style="color: whitesmoke !important; font-weight:600;border-bottom:{{ Request::routeIs('menuproject') ? '1px solid whitesmoke' : '' }}">Project</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: whitesmoke !important; font-weight:600">
                                {{ Auth::user()->name }}
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </nav>
                @endguest
            </ul>
        </div>
    </div>
</nav>