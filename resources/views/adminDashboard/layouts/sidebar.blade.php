<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                   Hello
                </a>
            </li>  --}}
            <li class="nav-item">
                <a  href="/dashboard/admin/students">
                    <span data-feather="file"></span>
                    My Photos
                </a>
            </li>
        </ul>
    </div>
</nav>