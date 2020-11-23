<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ url('home') }}" style="color: #1b1b1b; font-weight: bold;font-size: 24px">
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
                <li class="{{ Request::is('suppliers*') ? 'active' : '' }}">
                    <a href="{{ url('suppliers') }}">
                        <i class="fas fa-gift"></i>Suppliers
                    </a>
                </li>
                <li class="{{ Request::is('productcategories*') ? 'active' : '' }}">
                    <a href="{{ url('productcategories') }}">
                        <i class="fas fa-list"></i>Product Categories
                    </a>
                </li>
                <li class="{{ Request::is('products*') ? 'active' : '' }}">
                    <a href="{{ url('products') }}">
                        <i class="fas fa-list-alt"></i>Products
                    </a>
                </li>
                <li {{ Request::is('productreviews*') ? 'active' : '' }}>
                    <a href="{{ url('productreviews') }}">
                        <i class="far fa-check-square"></i>Product Reviews
                    </a>
                </li>
                <li {{ Request::is('reportproducts*') ? 'active' : '' }}>
                    <a href="{{ url('reportproducts') }}">
                        <i class="far fa-file"></i>Report Product
                    </a>
                </li>
                <li {{ Request::is('supports*') ? 'active' : '' }}>
                    <a href="{{ url('supports') }}">
                        <i class="fas fa-calendar-alt"></i>Support Tickets
                    </a>
                </li>
                @if(Auth::user()->isAdmin())
                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{{ url('users') }}">
                        <i class="fas fa-users"></i>Users
                    </a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
