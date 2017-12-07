<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-title">
                Management Section
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Products</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.all') }}"><i class="icon-puzzle"></i> View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}"><i class="icon-puzzle"></i> Create New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-puzzle"></i> Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-puzzle"></i> Tags</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Inventory</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-star"></i> Purchase Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-star"></i> Transfer Product</a>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="nav-title">
                Administration
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Users</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.all') }}"><i class="icon-star"></i> View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.create') }}"><i class="icon-star"></i> Add New</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>