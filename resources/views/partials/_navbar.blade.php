{{-- <!-- Default Bootstrap Navbar -->
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
 --}}

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <!-- Navbar Brand -->
    <a class="navbar-brand" href="/">Laravel Blog</a>
  
    <!-- Navbar Toggler Button for Small Screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar Links and Dropdowns -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar Links -->
      <ul class="navbar-nav mr-auto">
        <!-- Home Link -->
        <li class="nav-item active">
          <a class="nav-link {{ Request::is('/') ? "active" : "" }}" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- Regular Link -->
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? "active" : "" }}" href="/about">About</a>
        </li>
        <!-- Regular Link -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('contact') ? "active" : "" }}" href="/contact">Contact</a>
          </li>
        <!-- Dropdown Link -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            My Account
          </a>
          <!-- Dropdown Menu -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
  
      <!-- Search Form -->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
<!-- End of Default Bootstrap Navbar -->
  