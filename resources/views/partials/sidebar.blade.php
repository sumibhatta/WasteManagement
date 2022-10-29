<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Waste Management</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ request()->routeIs('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                </ul>
            </li>
            <li class="menu-header">Drivers</li>
            <li class="dropdown {{ request()->is('drivers/*') || request()->is('drivers') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('driver.index') }}"><i class="fas fa-truck"></i> <span>Drivers</span></a>
            </li>

            <li class="menu-header">My Account</li>
            <li class="dropdown {{ request()->is('customers/*') || request()->is('customers') ? 'active' : '' }}">
               <a class="nav-link" href="{{ route('customer.index') }}"><i class="fas fa-users"></i> <span>My Account</span></a>
            </li>

            <!-- EOS -->
            {{-- Start of Payments --}}
            <li class="menu-header">Bills</li>
            <li class="dropdown {{ request()->is('customers/*') || request()->is('customers') ? 'active' : '' }}">
                <a class="nav-link"
                            href="{{ route('customer.bill') }}"><i
                        class="fas fa-truck"></i> <span>Unpaid Bills</span></a>
            </li>
            {{-- End of Payments --}}

            

             {{-- Statrt of Reports --}}
             <li class="menu-header">Report</li>
             <li class="dropdown {{ request()->is('drivers/*') || request()->is('drivers') ? 'active' : '' }}">
                <a class="nav-link"
                            href="{{ route('driver.index') }}"><i
                         class="fas fa-truck"></i> <span>Write a Report</span></a>
             </li>
             {{-- End of Reports --}}
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
