<!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('home') }}">
                <img src="{{ url('source/images/logo.png') }}" alt="Mono">
                <span class="brand-name">MONO</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">



                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('home') }}">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>



                <li class="section-title">
                    Apps
                </li>

                <li>
                    <a class="sidenav-item-link" href="{{ route('category') }}">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span class="nav-text">Category</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="{{ route('product') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Add Product</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="{{ route('product') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Product Data</span>
                    </a>
                </li>

            </ul>

        </div>

        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <ul class="d-flex">
                    <li>
                        <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i
                                class="mdi mdi-settings"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="No chat messages"><i
                                class="mdi mdi-chat-processing"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
