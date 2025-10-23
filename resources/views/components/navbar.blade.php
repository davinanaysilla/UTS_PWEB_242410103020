<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand brand-logo" href="{{ route('dashboard', ['username' => request()->query('username', 'Guest')]) }}">
            <i class="fas fa-strawberry strawberry-icon me-2"></i>
            Strawberry Cafe
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active fw-bold' : '' }}"
                       href="{{ route('dashboard', ['username' => request()->query('username', 'Guest')]) }}">
                        <i class="fas fa-home me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('pengelolaan') ? 'active fw-bold' : '' }}"
                       href="{{ route('pengelolaan', ['username' => request()->query('username', 'Guest')]) }}">
                        <i class="fas fa-utensils me-1"></i> Pengelolaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('profile') ? 'active fw-bold' : '' }}"
                       href="{{ route('profile', ['username' => request()->query('username', 'Guest')]) }}">
                        <i class="fas fa-user me-1"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/login">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
