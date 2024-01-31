<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">POS RENALD</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PR</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="{{ 'dashboard' }}" class="nav-link has-dropdown"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ 'dashboard' }}">General Dashboard</a>
                    </li>
                    <li class='{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ 'dashboard' }}">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">All Product</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('order.index') }}">All Orders</a>
                    </li>

                </ul>
            </li>

            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Soal</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('soal.index') }}">All Soal</a>
                    </li>
                </ul>
            </li> --}}
    </aside>
</div>
