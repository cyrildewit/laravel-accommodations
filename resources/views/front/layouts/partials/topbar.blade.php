<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <div class="container">

        <a class="navbar-brand" href="{{ route('front.home.index') }}">Accommodations</a>

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

            @guest('secure')
            <!-- Nav Item - Login -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('secure.auth.login') }}">
                    <span class="d-none d-lg-inline text-gray-600">Inloggen</span>
                </a>
            </li>
            @endguest

            @auth('secure')
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ current_user()->full_name }}</span>
                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                </a>

                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="{{ route('secure.dashboard.index') }}">
                        <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                        Mijn overzicht
                    </a>

                    <a class="dropdown-item" href="{{ route('secure.bookings.index') }}">
                        <i class="fas fa-atlas fa-sm fa-fw mr-2 text-gray-400"></i>
                        Reserveringen
                    </a>

                    <a class="dropdown-item" href="#">
                        <i class="fas fa-star fa-sm fa-fw mr-2 text-gray-400"></i>
                        Beoordelingen
                    </a>

                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Instellingen
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{ route('secure.auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>

                </div>
            </li>
            @endauth

        </ul>

    </div>

</nav>
<!-- End of Topbar -->

<!-- Logout Form -->
<form id="logout-form" action="{{ route('secure.auth.logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
