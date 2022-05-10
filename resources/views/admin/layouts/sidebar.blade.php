<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">@lang('translation.Dashboards')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cog"></i>
                        <span key="t-ecommerce">Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="javascript: void(0);" key="t-products">Products</a></li>
                        <li><a href="{{route('admin.user.index')}}" key="t-product-detail">Users</a></li>
                        <li><a href="javascript: void(0);" key="t-orders">Verification</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-dollar-circle"></i>
                        <span key="t-ecommerce">Transaction</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="javascript: void(0);" key="t-products">Pending</a></li>
                        <li><a href="javascript: void(0);" key="t-products">Manual</a></li>
                        <li><a href="javascript: void(0);" key="t-orders">Approved</a></li>
                        <li><a href="javascript: void(0);" key="t-customers">Rejected</a></li>
                        <li><a href="javascript: void(0);" key="t-cart">System Statement</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bank"></i>
                        <span key="t-ecommerce">Recollection</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="javascript: void(0);" key="t-products">Bank Statement</a></li>
                        <li><a href="javascript: void(0);" key="t-products">Analysis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-ecommerce">Administration</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="javascript: void(0);" key="t-products">Report</a></li>
                        <li><a href="{{route('manager.index')}}" key="t-products">Manager</a></li>
                        <li><a href="javascript: void(0);" key="t-products">Broadcast</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
