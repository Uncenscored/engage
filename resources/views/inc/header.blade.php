<header>
<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        {{-- <div class="polygon-left"></div>
        <div class="polygon-right"></div> --}}
        <div class="container d-flex align-items-center justify-content-between">
            <!-- logo -->
            <a class="site-logo" href="{{ url('/') }}">
                <img src="img/logo/Controller-Final.png" alt="">
            </a>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <!-- site menu -->
            <nav class="main-menu">
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('review') }}">Games</a></li>
                    <li><a href="{{ url('categories') }}">Blog</a></li>
                    <li><a href="{{ url('community') }}">Forums</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="user-panel">
                <a href="#">Login</a>  /  <a href="#">Register</a>
            </div>
        </div>
    </header>
    <!-- Header section end -->

