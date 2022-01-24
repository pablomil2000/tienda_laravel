<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>

        @guest
            @if (Route::has('login'))
                <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
        <li class="nav-item dropdown">
            <a class="btn btn-primary" href="{{ Route('admin.products.index') }}" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Admin</a>
        </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="btn btn-primary dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </div>
</nav>
