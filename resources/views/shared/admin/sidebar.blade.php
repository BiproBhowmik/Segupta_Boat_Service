<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('admin.bookings') }}">
                    <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-sort"></i></div>
                    Bookings
                </a>

                <a class="nav-link" href="{{ route('admin.payments') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill-transfer"></i></div>
                    Payments
                </a>
                <a class="nav-link" href="{{ route('admin.packages') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tag"></i></div>
                    Packages
                </a>
                <a class="nav-link" href="{{ route('admin.offers') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-gift"></i></div>
                    Offers
                </a>
                <a class="nav-link" href="{{ route('admin.users') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>
                <a class="nav-link" href="{{ route('admin.user_info') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users Info
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>
