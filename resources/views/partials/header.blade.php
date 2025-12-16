<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>0888 1234 5678</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">Employee Management</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="nav- link fw-bold {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="/company"
                            class="nav- link fw-bold {{ Request::is('company') ? 'active' : '' }}">Company</a></li>
                    <li><a href="/departement"
                            class="nav- link fw-bold {{ Request::is('departement') ? 'active' : '' }}">Departement</a>
                    </li>
                    <li><a href="/position"
                            class="nav- link fw-bold {{ Request::is('position') ? 'active' : '' }}">Position</a></li>
                    <li><a href="/employee"
                            class="nav- link fw-bold {{ Request::is('employee') ? 'active' : '' }}">Employee</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>

</header>
