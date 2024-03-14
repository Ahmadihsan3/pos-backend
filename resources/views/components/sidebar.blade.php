<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Pos Ihsan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-user"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('users.index') }}">All Users</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa-brands fa-product-hunt"></i><span>Products</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('products.index') }}">All Products</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa-brands fa-shopify"></i><span>Order</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('order.index') }}">All Order</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa-brands fa-shopify"></i><span>Laporan</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('laporanharian.index') }}">Laporan Harian</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('laporanbulanan.index') }}">Laporan Bulanan</a>
                    </li>
                </ul>
            </li>

    </aside>
</div>
<script src="https://kit.fontawesome.com/71991790e8.js" crossorigin="anonymous"></script>
