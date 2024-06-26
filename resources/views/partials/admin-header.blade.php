<?php
    $user = Auth::user();
?>

<header class="sergey-admin-header">
    <div class="nav-logo">
        <a href="#">
            <img src="/images/logo1.jpg" alt="">
        </a>
    </div>
    <div class="nav-links" id="nav-links-center">
        <ul>
            @auth
                <li><a href="{{route('demos.index')}}">Demos</a></li>
                @if($user->isAn('root'))
                    <li><a href="{{route('admin.users.index')}}">Users</a></li>
                @endif
                <li><a href="{{route('contact.show_all')}}">Inquieries</a></li>
            @endauth
        </ul>
    </div>
    <div class="nav-links" id="nav-links-right">
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
    <div class="nav-toggle">
        <i class="f7-icons size-28" id="nav-toggle">bars</i>
    </div>
</header>

<script>
    const navBtn = document.getElementById("nav-toggle");
    const navLinksCenter = document.getElementById("nav-links-center");
    const navLinksRight = document.getElementById("nav-links-right");
    let pageWidth = document.documentElement.clientWidth || document.body.clientWidth || window.innerWidth;

    navBtn.addEventListener("click", () => {
        console.log("clicked!");
        navLinksCenter.classList.toggle("show-links");
        navLinksCenter.classList.toggle("nav-links");
        navLinksRight.classList.toggle("show-links");
        navLinksRight.classList.toggle("nav-links");
    });
</script>
