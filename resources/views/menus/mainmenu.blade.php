<div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-0 pt-2">

    <div class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto m-2">
        <img src="/logo.png" class="mx-auto" style="width:60%;">
    </div>
    <div class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto m-2">
        <a href="/" class="text-white text-decoration-none mx-auto">
            <span class="fs-5">
                <span class="d-none d-sm-inline">{{ config('app.name', 'Laravel') }}</span>
            </span>
        </a>
    </div>

    <ul class="nav navbar navbar-dark text-white nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start"
        id="menu">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
        @else
            @if (Auth::user()->isEmployee())
                @if (Auth::user()->isAdmin())
                    @include('menus.parts.main_admin')
                @endif
                @if (Auth::user()->isHR())
                    @include('menus.parts.main_humanres')
                @endif
                @if (Auth::user()->isBoss())
                    @include('menus.parts.main_boss')
                @endif
                @if (Auth::user()->isEmployee())
                    @include('menus.parts.main_employee')
                @endif
            @endif
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="bi bi-person-rolodex fs-4"></i> {{ Auth::user()->userable->shortname }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"
                        href="{{ URL::route('employees.show', ['employee' => Auth::user()->userable_id]) }}">Мій профіль</a>
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
        @endguest
    </ul>
</div>
