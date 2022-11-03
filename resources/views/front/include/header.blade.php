<header class="header header-page">
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav scroll-sticky add-header-bg">
            <div class="container ">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('/') }}" class="navbar-brand logo">
                        <img src="{{ asset('/') }}assets/front/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('/') }}" class="menu-logo">
                            <img src="{{ asset('/') }}assets/front/img/logo.png" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">Courses</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">How it Works</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">Testimonials</a>
                        </li>
                        {{-- <li class="has-submenu">
                            <a href="#">Courses <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="blog-modern.html">Blog Modern</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li class="nav-item user-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="user-img">
                                <img src="{{ asset('/') }}assets/front/img/user/user11.jpg" alt="">
                                <span class="status online"></span>
                            </span>
                        </a>
                        <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('/') }}assets/front/img/user/user11.jpg" alt="User Image"
                                      class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6>Rolands R</h6>
                                    <p class="text-muted mb-0">Student</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="setting-edit-profile.html"><i class="feather-user me-1"></i>
                                Profile</a>
                            <a class="dropdown-item" href="setting-student-subscription.html"><i
                                  class="feather-star me-1"></i> Subscription</a>
                            <div class="dropdown-item night-mode">
                                <span><i class="feather-moon me-1"></i> Night Mode </span>
                                <div class="form-check form-switch check-on m-0">
                                    <input class="form-check-input" type="checkbox" id="night-mode">
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{ url('/') }}"><i class="feather-log-out me-1"></i>
                                Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="sidebar-overlay"></div>
    </div>
</header>
