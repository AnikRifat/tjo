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
                        <img src="{{ asset('/') }}assets/front/img/logo.svg" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('/') }}" class="menu-logo">
                            <img src="{{ asset('/') }}assets/front/img/logo.svg" class="img-fluid" alt="Logo">
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
                            <a href="{{ url('/') }}">Courses</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">About</a>
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
                    <li class="nav-item">
                        <a href="course-message.html"><img src="{{ asset('/') }}assets/front/img/icon/messages.svg"
                              alt="img"></a>
                    </li>
                    <li class="nav-item cart-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('/') }}assets/front/img/icon/cart.svg" alt="img">
                        </a>
                        <div class="wishes-list dropdown-menu dropdown-menu-right">
                            <div class="wish-header">
                                <a href="#">View Cart</a>
                                <a href="javascript:void(0)" class="float-end">Checkout</a>
                            </div>
                            <div class="wish-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="course-details.html">
                                                        <img alt=""
                                                          src="{{ asset('/') }}assets/front/img/course/course-04.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="course-details.html">Learn Angular...</a></h6>
                                                    <p>By Dave Franco</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="course-details.html">
                                                        <img alt=""
                                                          src="{{ asset('/') }}assets/front/img/course/course-14.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="course-details.html">Build Responsive Real...</a></h6>
                                                    <p>Jenis R.</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="course-details.html">
                                                        <img alt=""
                                                          src="{{ asset('/') }}assets/front/img/course/course-15.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="course-details.html">C# Developers Double ...</a></h6>
                                                    <p>Jesse Stevens</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total-item">
                                    <h6>Subtotal : $ 600</h6>
                                    <h5>Total : $ 600</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item wish-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('/') }}assets/front/img/icon/wish.svg" alt="img">
                        </a>
                        <div class="wishes-list dropdown-menu dropdown-menu-right">
                            <div class="wish-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="course-details.html">
                                                        <img alt=""
                                                          src="{{ asset('/') }}assets/front/img/course/course-04.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="course-details.html">Learn Angular...</a></h6>
                                                    <p>By Dave Franco</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="course-details.html">
                                                        <img alt=""
                                                          src="{{ asset('/') }}assets/front/img/course/course-14.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="course-details.html">Build Responsive Real...</a></h6>
                                                    <p>Jenis R.</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="course-details.html">
                                                        <img alt=""
                                                          src="{{ asset('/') }}assets/front/img/course/course-15.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="course-details.html">C# Developers Double ...</a></h6>
                                                    <p>Jesse Stevens</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item noti-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('/') }}assets/front/img/icon/notification.svg" alt="img">
                        </a>
                        <div class="notifications dropdown-menu dropdown-menu-right">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications
                                    <select>
                                        <option>All</option>
                                        <option>Unread</option>
                                    </select>
                                </span>
                                <a href="javascript:void(0)" class="clear-noti">Mark all as read <i
                                      class="fa-solid fa-circle-check"></i></a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>
                                                <a href="notifications.html" class="avatar">
                                                    <img class="avatar-img" alt=""
                                                      src="{{ asset('/') }}assets/front/img/user/user1.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="notifications.html">Lex Murphy requested <span>access
                                                            to</span> UNIX directory tree hierarchy </a></h6>
                                                <button class="btn btn-accept">Accept</button>
                                                <button class="btn btn-reject">Reject</button>
                                                <p>Today at 9:42 AM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>
                                                <a href="notifications.html" class="avatar">
                                                    <img class="avatar-img" alt=""
                                                      src="{{ asset('/') }}assets/front/img/user/user2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="notifications.html">Ray Arnold left 6 <span>comments
                                                            on</span> Isla Nublar SOC2 compliance report</a></h6>
                                                <p>Yesterday at 11:42 PM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>
                                                <a href="notifications.html" class="avatar">
                                                    <img class="avatar-img" alt=""
                                                      src="{{ asset('/') }}assets/front/img/user/user3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="notifications.html">Dennis Nedry <span>commented on</span>
                                                        Isla Nublar SOC2 compliance report</a></h6>
                                                <p class="noti-details">“Oh, I finished de-bugging the phones, but the
                                                    system's compiling for eighteen minutes, or twenty. So, some minor
                                                    systems may go on and off for a while.”</p>
                                                <p>Yesterday at 5:42 PM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>
                                                <a href="notifications.html" class="avatar">
                                                    <img class="avatar-img" alt=""
                                                      src="{{ asset('/') }}assets/front/img/user/user1.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="notifications.html">John Hammond <span>created</span> Isla
                                                        Nublar SOC2 compliance report </a></h6>
                                                <p>Last Wednesday at 11:15 AM</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
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
