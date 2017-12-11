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
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-star"></i> Customers
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customers.all') }}">
                            <i class="icon-star"></i> All Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customers.create') }}">
                            <i class="icon-star"></i> New Customer
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-star"></i> Suppliers
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('suppliers.all') }}">
                            <i class="icon-star">   </i> All Suppliers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('suppliers.create') }}">
                            <i class="icon-star"></i> New Supplier
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Items</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('items.all') }}"><i class="icon-star"></i> All Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('items.create') }}"><i class="icon-star"></i> Create Item</a>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="nav-title">
                Inventory
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sales') }}">
                    <i class="icon-speedometer"></i> Sales
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="icon-speedometer"></i> Receivings
                </a>
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
