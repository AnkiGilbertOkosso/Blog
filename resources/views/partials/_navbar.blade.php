<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <!-- Navbar Brand -->
        <a class="navbar-brand" href="/">Laravel Blog</a>

        <!-- Navbar Toggler for Responsive Design -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Collapse Section -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Navbar Links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- Home Link -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? "active" : "" }}" aria-current="{{ Request::is('/') ? "page" : "" }}" href="/">Home</a>
                </li>

                <!-- About Link -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? "active" : "" }}" aria-current="{{ Request::is('about') ? "page" : "" }}" href="/about">About</a>
                </li>

                <!-- Contact Link -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? "active" : "" }}" aria-current="{{ Request::is('contact') ? "page" : "" }}" href="/contact">Contact us</a>
                </li>

            </ul>

            <!-- Dropdown for My Account -->
            <li class="nav-item dropdown list-unstyled">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>

        </div>
    </div>
</nav>
<!-- End of Default Bootstrap Navbar -->