<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Sejarah11</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/kumpulan-materi">Baca materi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/quiz">Quiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "
                        href="/leaderboard">Leaderboard</a>
                </li>
            </ul>
            <ul class="navbar- nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </li>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/login" class="nav-link"><i
                                    class="bi bi-box-arrow-in-right"></i>Login</a>
                        </li>
                    </ul>
                @endauth
            </ul>


        </div>
    </div>
</nav>
