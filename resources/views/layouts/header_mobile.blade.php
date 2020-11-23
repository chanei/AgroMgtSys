<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{ url('/home') }}">
                    {{-- <img src="{{ asset('template/images/icon/logo.png') }}" alt="Agro-Mgt Sys" /> --}}
                    Agro-Mgt Sys
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="active">
                    <a class="js-arrow" href="{{ url('/home') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('suppliers') }}">
                        <i class="fas fa-gift"></i>Suppliers
                    </a>
                </li>
                <li>
                    <a href="{{ url('productcategories') }}">
                        <i class="fas fa-list"></i>Product Categories
                    </a>
                </li>
                <li>
                    <a href="{{ url('products') }}">
                        <i class="fas fa-list-alt"></i>Products
                    </a>
                </li>
                <li>
                    <a href="{{ url('productreviews') }}">
                        <i class="far fa-check-square"></i>Product Reviews
                    </a>
                </li>
                <li>
                    <a href="{{ url('reportproducts') }}">
                        <i class="far fa-file"></i>Report Product
                    </a>
                </li>
                <li>
                    <a href="{{ url('supports') }}">
                        <i class="fas fa-calendar-alt"></i>Support Tickets
                    </a>
                </li>
                <li>
                    <a href="{{ url('users') }}">
                        <i class="fas fa-user-md"></i>Users
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
