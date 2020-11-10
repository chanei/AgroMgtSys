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
                    <a href="{{ url('customers') }}">
                        <i class="fas fa-users"></i>Customers
                    </a>
                </li>
                <li>
                    <a href="{{ url('drivers') }}">
                        <i class="fas fa-car"></i>Drivers
                    </a>
                </li>
                <li>
                    <a href="{{ url('customer-tokens') }}">
                        <i class="far fa-check-square"></i>Customer Tokens
                    </a>
                </li>
                <li>
                    <a href="{{ url('redemed-tokens') }}">
                        <i class="fas fa-calendar-alt"></i>Redeemed Tokens
                    </a>
                </li>
                <li>
                    <a href="{{ url('users') }}">
                        <i class="fas fa-user-md"></i>Users
                    </a>
                </li>
                <li>
                    <a href="{{ url('audit-trails') }}">
                        <i class="fas fa-list-alt"></i>Audit Trails
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
