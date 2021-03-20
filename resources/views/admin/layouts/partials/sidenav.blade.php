<!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light  bg-default bg-custom"
            id="sidenav-main">
            <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header  align-items-center">
                    <a class="navbar-brand" href="javascript:void(0)">
                        <img src="{{asset('assets/img/brand/blanc-logo.png')}}" class="navbar-brand-img" alt="...">
                    </a>
                </div>
                <div class="navbar-inner">
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Nav items -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{request()->segment(2) == '' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                    <i class="ni ni-tv-2 "></i>
                                    <span class="nav-link-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{request()->segment(2) == 'users' ? 'active' : '' }}" href="{{ route('dashboard.users') }}">
                                    
                                    <i class="ni ni-single-02 "></i>
                                    <span class="nav-link-text">Users</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="ni ni-planet "></i>
                                    <span class="nav-link-text">Amazon</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="ni ni-pin-3 "></i>
                                    <span class="nav-link-text">Google</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="ni ni-bullet-list-67 "></i>
                                    <span class="nav-link-text">Tables</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="ni ni-key-25"></i>
                                    <span class="nav-link-text">Login</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="ni ni-circle-08 "></i>
                                    <span class="nav-link-text">Register</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="ni ni-send "></i>
                                    <span class="nav-link-text">Upgrade</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Divider -->
                        <hr class="my-3">
                        <!-- Heading -->
                        <h6 class="navbar-heading p-0 text-muted">
                            <span class="docs-normal">Documentation</span>
                        </h6>
                        <!-- Navigation -->
                        <ul class="navbar-nav mb-md-3">
                            <li class="nav-item">
                                <a class="nav-link" href="docs/getting-started/overview.html" target="_blank">
                                    <i class="ni ni-spaceship"></i>
                                    <span class="nav-link-text">Getting started</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="docs/foundation/colors.html" target="_blank">
                                    <i class="ni ni-palette"></i>
                                    <span class="nav-link-text">Foundation</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="docs/components/alerts.html" target="_blank">
                                    <i class="ni ni-ui-04"></i>
                                    <span class="nav-link-text">Components</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="docs/plugins/charts.html" target="_blank">
                                    <i class="ni ni-chart-pie-35"></i>
                                    <span class="nav-link-text">Plugins</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
