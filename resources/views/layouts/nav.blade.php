<nav class="navbar navbar-expand-lg fixed-top bg-danger " >
    <div class="container">
        <div class="navbar-translate">
            @guest
            <a class="navbar-brand" href="{{ route('home_page') }}" rel="tooltip"
               title="Coded by Creative Tim" data-placement="bottom" >
                Shop
            </a>
            @else
            <a class="navbar-brand" href="{{ url('/home') }}" rel="tooltip"
               title="Coded by Creative Tim" data-placement="bottom" >
                Shop
            </a>
            @endguest
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="nav-link" hidden>login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/register') }}" class="nav-link" hidden>register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('order.all') }}" class="nav-link">Orders</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li>
                    <form class="form-inline ml-auto" style="margin-top: 15px" action="{{ route('home_page') }}">
                        <div class="form-group has-white">
                            <input type="text" name="search" class="form-control" placeholder="Search" hidden>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>