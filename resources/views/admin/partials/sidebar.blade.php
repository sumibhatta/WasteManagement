<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}">Admin Waste Management</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ request()->routeIs('admin.home') ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}" class="nav-link has"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">USERS</li>
            <li class="dropdown {{ request()->is('admin/drivers/*') || request()->is('admin/drivers') ? 'active' : '' }}">
                <a href="{{ route('admin.driver.index') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-truck"></i> <span>Driver</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('admin.driver.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.driver.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Drivers</a></li>
                    <li class="{{ request()->routeIs('admin.driver.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.driver.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Driver</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('admin/customers/*') || request()->is('admin/customers') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Customer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('admin.customer.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.customer.index') }}"><i class="mr-1 fas fa-list-ol"></i><span>List
                                Customers</span></a></li>
                    <li class="{{ request()->routeIs('admin.customer.create') || request()->is('admin/customers/*/create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.customer.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Customer</a>
                    </li>
                </ul>
            </li>

            <!-- EOS -->
            {{-- Start of Payments --}}
            <li class="menu-header">Payments</li>
            <li class="dropdown {{ request()->is('admin/salaries/*') || request()->is('admin/salaries') ? 'active' : '' }}">
                <a href="{{ route('admin.salary.index') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-truck"></i> <span>Salary</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('admin.salary.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.salary.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Salaries</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('admin/payments/*') || request()->is('admin/payments') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Customer Payments</span></a>
                <ul class="dropdown-menu">
                    {{-- <li class="{{ request()->routeIs('admin.payment.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.payment.index') }}"><i class="mr-1 fas fa-list-ol"></i><span>List
                                Payments</span></a></li>
                    <li class="{{ request()->routeIs('admin.payment.create') || request()->is('admin/payments/*/create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.payment.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Payment</a>
                    </li> --}}
                </ul>
            </li>
            {{-- End of Payments --}}


            {{-- Statrt of Waste Collection --}}
            <li class="menu-header">Waste Collection</li>
            <li class="dropdown {{ request()->is('drivers/*') || request()->is('drivers') ? 'active' : '' }}">
                <a href="{{ route('driver.index') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-truck"></i> <span>Driver</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('driver.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('driver.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Drivers</a>
                    </li>
                    <li class="{{ request()->routeIs('driver.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('driver.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Driver</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('customers/*') || request()->is('customers') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i>
                    <span>Customer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('customer.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('customer.index') }}"><i class="mr-1 fas fa-list-ol"></i><span>List
                                Customers</span></a></li>
                    <li class="{{ request()->routeIs('customer.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('customer.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Customer</a>
                    </li>
                </ul>
            </li>
            {{-- End of Waste Collection --}}

             {{-- Statrt of Reports --}}
             <li class="menu-header">Reports</li>
             <li class="dropdown {{ request()->is('drivers/*') || request()->is('drivers') ? 'active' : '' }}">
                 <a href="{{ route('driver.index') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i
                         class="fas fa-truck"></i> <span>Driver</span></a>
                 <ul class="dropdown-menu">
                     <li class="{{ request()->routeIs('driver.index') ? 'active' : '' }}"><a class="nav-link"
                             href="{{ route('driver.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Drivers</a>
                     </li>
                     <li class="{{ request()->routeIs('driver.create') ? 'active' : '' }}"><a class="nav-link"
                             href="{{ route('driver.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Driver</a></li>
                 </ul>
             </li>
             <li class="dropdown {{ request()->is('customers/*') || request()->is('customers') ? 'active' : '' }}">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i>
                     <span>Customer</span></a>
                 <ul class="dropdown-menu">
                     <li class="{{ request()->routeIs('customer.index') ? 'active' : '' }}"><a class="nav-link"
                             href="{{ route('customer.index') }}"><i class="mr-1 fas fa-list-ol"></i><span>List
                                 Customers</span></a></li>
                     <li class="{{ request()->routeIs('customer.create') ? 'active' : '' }}"><a class="nav-link"
                             href="{{ route('customer.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Customer</a>
                     </li>
                 </ul>
             </li>
             {{-- End of Reports --}}



            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
            document.getElementById('logout-form').submit()";
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i>{{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </aside>
</div>
