<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
    <div class="container-fluid p-0">
        <!-- logo -->
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('assets')}}/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
               @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                @endguest
                   <form action="{{ route('logout') }}" method="post" id="logoutForm">
                       @csrf
                   </form>
                @auth
                    <li class="nav-item">
                        <a class="nav-link"  onclick="document.getElementById('logoutForm').submit()" >Logout</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
