<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ url('home') }}">
            Agro-Mgt Sys
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ Request::is('home*') ? 'active' : '' }}">
                    <a class="js-arrow" href="{{ url('/home') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="{{ Request::is('customers*') ? 'active' : '' }}">
                    <a href="{{ url('customers') }}">
                        <i class="fas fa-users"></i>Customers
                    </a>
                </li>
                <li class="{{ Request::is('drivers*') ? 'active' : '' }}">
                    <a href="{{ url('drivers') }}">
                        <i class="fas fa-car"></i>Drivers
                    </a>
                </li>
                <li {{ Request::is('customer-tokens*') ? 'active' : '' }}>
                    <a href="{{ url('customer-tokens') }}">
                        <i class="far fa-check-square"></i>Customer Tokens
                    </a>
                </li>
                <li {{ Request::is('redeemed-tokens*') ? 'active' : '' }}>
                    <a href="{{ url('redeemed-tokens') }}">
                        <i class="fas fa-calendar-alt"></i>Redeemed Tokens
                    </a>
                </li>
                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{{ url('users') }}">
                        <i class="fas fa-user-md"></i>Users
                    </a>
                </li>
                <li class="{{ Request::is('audit-trails*') ? 'active' : '' }}">
                    <a href="{{ url('audit-trails') }}">
                        <i class="fas fa-list-alt"></i>Audit Trails
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
