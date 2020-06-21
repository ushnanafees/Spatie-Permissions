

<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Sales Funnel </span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">

                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                   >
                    <a href="dashboard" class="nav-link"><span class="pcoded-micon"><i
                            class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>

                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                    >
                    <a href="sales_funnel" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span class="pcoded-mtext">Sales Funnel </span></a>
                </li>

                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project">
                    <a href="add_orders" class="nav-link"><span class="pcoded-micon">
                            <i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Add Orders</span></a>
                </li>

            @role('salesman'|'admin')
                <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                    <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Sales Persons</span></a>
                    <ul class="pcoded-submenu" >
                        <li class="active "><a href="view_salesperson" class="">View Sales Persons</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Extras</label>
                </li>
                <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item active pcoded-hasmenu">
                    <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Admin Tools</span></a>
                    <ul class="pcoded-submenu">
                        <li class="active "><a href="register" class="">Add User</a></li>
                        <!--<li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li> -->
                    </ul>


                </li>
                @endrole




            </ul>
        </div>
    </div>
</nav>


