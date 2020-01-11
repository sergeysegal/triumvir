<?php
    $user = Auth::user();
?>

<header class="sergey-header">
    <div class="nav-logo">
        <a href="#">
            <img src="/images/logo1.jpg" alt="">
        </a>
    </div>
    <div class="nav-links">
        <ul>
            @auth
                <li><a href="/home">Home</a></li>
                <li><a href="#">Careers</a></li>
                @if($user->isAn('root'))
                    <li><a href="{{route('admin.users.index')}}">Users</a></li>
                @endif
            @else
                <li><a href="/home">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Contact Us</a></li>
            @endauth
        </ul>
    </div>
    <div class="nav-links">
        <ul>
            @guest
                @if (Route::has('login'))
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endif
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            @else
                <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
            @endguest
        </ul>
    </div>
</header>
