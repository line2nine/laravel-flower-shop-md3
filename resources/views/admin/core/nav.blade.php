<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{route('admin.dashboard')}}">
            <h5 class="logo-text">Dashboard</h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse"
             data-target="#user-dropdown">
            <div class="media-body" style="text-align: center">
                @if(\Illuminate\Support\Facades\Auth::check())
                <h6 class="side-user-name">{{strtoupper(auth()->user()->name)}}</h6>
                @endif
            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">
                @if(\Illuminate\Support\Facades\Auth::check())
                <li><a href="{{route('user.detail', auth()->user()->id)}}"><i class="icon-user"></i>My Profile</a></li>
                <li><a href="{{route('user.changePass', auth()->user()->id)}}"><i
                            class="icon-settings"></i>Change Password</a></li>
                <li><a href="{{route('admin.logout')}}"><i class="icon-power"></i>Logout</a></li>
                @endif
            </ul>
        </div>
    </div>

    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i
                    class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="index.html"><i class="zmdi zmdi-long-arrow-right"></i> Ecommerce</a></li>
                <li><a href="index2.html"><i class="zmdi zmdi-long-arrow-right"></i> Property Listings</a></li>
                <li><a href="dashboard-service-support.html"><i class="zmdi zmdi-long-arrow-right"></i> Services &
                        Support</a></li>
                <li><a href="dashboard-logistics.html"><i class="zmdi zmdi-long-arrow-right"></i> Logistics</a></li>
            </ul>
        </li>
        <!-- -------------------------------------form----------------------------------------------------------------------- -->
        <li>
            <a href="#" class="waves-effect">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('user.list')}}"><i class="zmdi zmdi-long-arrow-right"></i>List</a></li>
                <li><a href="{{route('user.create')}}"><i class="zmdi zmdi-long-arrow-right"></i>Create New</a></li>

            </ul>
        </li>
        <!-- -------------------------------------form----------------------------------------------------------------------- -->
        <li>
            <a href="#" class="waves-effect">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Categories</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('category.index')}}"><i class="zmdi zmdi-long-arrow-right"></i>List</a></li>
                <li><a href="{{route('category.create')}}"><i class="zmdi zmdi-long-arrow-right"></i>Create New</a></li>

            </ul>
        </li>
        <!-- --------------------------------------------------endform------------------------------------------- -->
        <li>
            <a href="#" class="waves-effect">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Product</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('product.index')}}"><i class="zmdi zmdi-long-arrow-right"></i>List</a></li>
                <li><a href="{{route('product.create')}}"><i class="zmdi zmdi-long-arrow-right"></i>Create</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="waves-effect">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Orders</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('order.list')}}"><i class="zmdi zmdi-long-arrow-right"></i>List</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="waves-effect">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Blogs</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('blog.index')}}"><i class="zmdi zmdi-long-arrow-right"></i>List</a></li>
                <li><a href="{{route('blog.create')}}"><i class="zmdi zmdi-long-arrow-right"></i>Write</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--End sidebar-wrapper-->
