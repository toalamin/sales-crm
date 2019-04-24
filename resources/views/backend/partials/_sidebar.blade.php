<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <!-- Logo -->
            <a href="{{ route(session('role').'.dashboard') }}" class="link-fx text-white text-center">
                Sales CRM
            </a>
            <!-- END Logo -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route(session('role').'.dashboard') }}">
                    <i class="nav-main-link-icon si si-cursor"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>

            @if(session('role') === 'admin')
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route(session('role').'.customers.index') }}">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">Customers</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
<!-- END Sidebar -->
