<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"> HOME </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"> SELF-IMPROVEMENT </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"> PSYCHOLOGY </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#"> ROMANCE </a>
            </li>
        </ul>
    </div>

        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> Log In </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"> Register </a>
                </li>
            @else
                @if(Auth::user()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard"> Dashboard </a>
                    </li>
                @endif

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->username }} </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/profile"> Profile </a>
                        <a class="dropdown-item" href="/saved_articles"> Saved Articles </a>

                        <a class="dropdown-item" href="{{route("logout")}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout </a>

                        <form id="logout-form" action="{{route("logout")}}" method="POST" style="display:none"> {{csrf_field()}} </form>
                    </div>
                </li>
            @endguest    
        </ul>
    </div>
</nav>