<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Sejarah11</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('menu') ? 'active' : '' }}" href="/menu">Menu</a>
                </li>
              
               
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kumpulan-materi*') ? 'active' : '' }}" href="/kumpulan-materi">Baca
                        materi</a>
                </li>
             
               
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('quiz*') ? 'active' : '' }}" href="/quiz">Quiz</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('leaderboard_utama') ? 'active' : '' }}"
                        href="/leaderboard_utama">Leaderboard</a>
                </li>
               

              {{-- @can('admin') --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/levels') ? 'active' : '' }}"
                            href="/dashboard/levels">Dashboard</a>
                    </li>
                {{-- @endcan --}}

            </ul>
            <ul class="navbar- nav ms-auto bg-light">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profile">My profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item bg-light">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </li>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item {{ Request::is('/login') ? 'active' : '' }}">
                            <ul class="navbar- nav ms-auto bg-dark">
                                <li class="nav-item ">
                                    <a href="/login" class="nav-link"><i
                                            class="bi bi-box-arrow-in-right"></i>Login</a>
                                </li>
                            </ul>
                        @endauth
                </ul>


        </div>
    </div>
</nav>
