<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </li>
            <li>
                <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Categories <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.categories.create') }}">Add New</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Packages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.packages.create') }}">Add New</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.packages.index') }}">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Deals<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.deals.create') }}">Add New</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.deals.index') }}">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.bookings.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Bookings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.bookings.index') }}">Paid Booking</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.bookings.upon-requests') }}">Upon Requests</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>