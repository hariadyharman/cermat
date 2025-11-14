<header class="navbar navbar-dark sticky-top navbar-blue flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        SIMULASI CERMAT
    </a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav flex-row align-items-center ms-auto me-3">

        <span class="nav-link text-white me-3">
            Welcome, <strong>{{ auth()->user()->name ?? 'User' }}</strong>
        </span>

        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link px-3 border-0 logout-glow">
                    Logout <span data-feather="log-out"></span>
                </button>
            </form>
        </div>

    </div>

</header>


<style>
    /* Navbar Gradient Blue Modern */
    .navbar-blue {
        background: linear-gradient(90deg, #0d1b3d, #0a3d62, #1e90ff);
        box-shadow: 0 2px 12px rgba(30, 144, 255, 0.4);
        border-bottom: 2px solid rgba(30, 144, 255, 0.8);
    }

    .navbar-blue .navbar-brand {
        font-weight: 700;
        letter-spacing: 1px;
        text-shadow: 0 0 6px rgba(255, 255, 255, 0.5);
    }

    .navbar-blue .nav-link {
        transition: 0.25s ease-in-out;
    }

    .navbar-blue .nav-link:hover {
        text-shadow: 0 0 6px rgba(255, 255, 255, 0.7);
    }

    /* Logout neon red effect */
    .logout-glow {
        background: transparent;
        color: #fff;
        border-radius: 8px;
        position: relative;
        transition: 0.25s ease-in-out;
        font-weight: 500;
    }

    .logout-glow:hover {
        color: #fff;
        box-shadow: 0 0 10px #ff4d4d, 0 0 20px #ff1a1a, 0 0 35px #ff0000;
        background: rgba(255, 0, 0, 0.15);
    }

    .logout-glow:active {
        transform: scale(0.95);
    }
</style>
