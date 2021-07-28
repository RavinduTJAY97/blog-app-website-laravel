<div id="app">
<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}" style="color: gold">
        JAY WEB
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="/about" class="nav-link px-2 text-white">About</a></li>
            <li><a href="/services" class="nav-link px-2 text-white">Services</a></li>
            <li><a href="/posts" class="nav-link px-2 text-white">Blog</a></li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item" style="color: white">
                    <a style="color: white" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item" >
                        <a style="color: white" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item bg-dark" style="color: white" href="{{ route('home') }}">
                            {{ Auth::user()->name }}'s Posts
                        </a>
                        <a class="dropdown-item bg-dark" style="color: white" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>
</nav>
</div>
