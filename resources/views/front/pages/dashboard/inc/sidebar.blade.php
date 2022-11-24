<div class="settings-widget dash-profile mb-3">
    <div class="settings-menu p-0">
        <div class="profile-bg">
            <h5>Student</h5>
            <img src="{{ asset('/') }}assets/front/img/dark.jpg" alt="">
            <div class="profile-img">
                <a href="student-profile.html"><img src="{{ asset('/') }}assets/front/img/user/user.png" alt=""></a>
            </div>
        </div>
        <div class="profile-group">
            <div class="profile-name text-center">
                <h4><a href="student-profile.html">{{ Auth::user()->name }}</a></h4>
                <p>Student</p>
            </div>
            <div class="go-dashboard text-center">
                <a href="deposit-student-dashboard.html" class="btn btn-primary">
                    Home</a>
            </div>
        </div>
    </div>
</div>
<div class="settings-widget account-settings">
    <div class="settings-menu">
        <h3>ACCOUNT SETTINGS</h3>
        <ul>
            <li class="nav-item
            @if(Route::is('user.index') )
            active
            @endif
            ">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="feather-settings"></i>My Subscriptions
                </a>
            </li>
            <li class="nav-item ">
                <a href="setting-student-security.html" class="nav-link">
                    <i class="feather-user"></i> Security
                </a>
            </li>
            <li class="nav-item">
                <a href="setting-student-social-profile.html" class="nav-link">
                    <i class="feather-refresh-cw"></i> Purchase History
                </a>
            </li>
            <li class="nav-item">
                <a href="setting-student-notification.html" class="nav-link">
                    <i class="feather-bell"></i> Notifications
                </a>
            </li>
            <li class="nav-item">
                <a href="login.html" class="nav-link">
                    <i class="feather-power"></i> Sign Out
                </a>
            </li>
        </ul>
    </div>
</div>
