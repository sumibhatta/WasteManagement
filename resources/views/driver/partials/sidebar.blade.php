<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Driver Waste Management</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ request()->routeIs('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link has-dropdown"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('home') }}">General Dashboard</a></li>
                    <li><a class="nav-link" href="{{ route('home') }}">Ecommerce Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">USERS</li>
            <li class="dropdown {{ request()->is('drivers/*') || request()->is('drivers') ? 'active' : '' }}">
                <a href="{{ route('driver.index') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-truck"></i> <span>Driver</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('driver.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('driver.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Drivers</a></li>
                    <li class="{{ request()->routeIs('driver.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('driver.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Driver</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('customers/*') || request()->is('customers') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Customer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('customer.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('customer.index') }}"><i class="mr-1 fas fa-list-ol"></i><span>List
                                Customers</span></a></li>
                    <li class="{{ request()->routeIs('customer.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('customer.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Customer</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('managers/*') || request()->is('managers') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i> <span>Manager</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('manager.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('manager.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Managers</a>
                    </li>
                    <li class="{{ request()->routeIs('manager.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('manager.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Manager</a></li>
                </ul>
            </li>

            <!-- EOS -->
            {{-- Start of Payments --}}
            <li class="menu-header">Payments</li>
            <li class="dropdown {{ request()->is('drivers/*') || request()->is('drivers') ? 'active' : '' }}">
                <a href="{{ route('driver.index') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-truck"></i> <span>Driver</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('driver.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('driver.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Drivers</a></li>
                    <li class="{{ request()->routeIs('driver.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('driver.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Driver</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('customers/*') || request()->is('customers') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Customer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('customer.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('customer.index') }}"><i class="mr-1 fas fa-list-ol"></i><span>List
                                Customers</span></a></li>
                    <li class="{{ request()->routeIs('customer.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('customer.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Customer</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('managers/*') || request()->is('managers') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i> <span>Manager</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('manager.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('manager.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Managers</a>
                    </li>
                    <li class="{{ request()->routeIs('manager.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('manager.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Manager</a></li>
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
            <li class="dropdown {{ request()->is('managers/*') || request()->is('managers') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i>
                    <span>Manager</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('manager.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('manager.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Managers</a>
                    </li>
                    <li class="{{ request()->routeIs('manager.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('manager.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Manager</a>
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
             <li class="dropdown {{ request()->is('managers/*') || request()->is('managers') ? 'active' : '' }}">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i>
                     <span>Manager</span></a>
                 <ul class="dropdown-menu">
                     <li class="{{ request()->routeIs('manager.index') ? 'active' : '' }}"><a class="nav-link"
                             href="{{ route('manager.index') }}"><i class="mr-1 fas fa-list-ol"></i>List Managers</a>
                     </li>
                     <li class="{{ request()->routeIs('manager.create') ? 'active' : '' }}"><a class="nav-link"
                             href="{{ route('manager.create') }}"><i class="mr-1 fas fa-plus"></i>Add a Manager</a>
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
