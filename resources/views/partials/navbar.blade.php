<style>
    .navbar {
        background-color: #ed212b;
    }

    .navbar a {
        color: white !important;
        font-size: 16px;
    }

    .navbar-brand {
        font-size: 25px;
        font-weight: bold;
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url()->current() }}">TelU Guide</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('map') }}">Map</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('security.info') }}">Security</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.view.profile') }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
