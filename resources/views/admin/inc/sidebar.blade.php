<!--**********************************
            Sidebar start
        ***********************************-->
<!--**********************************
	Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                <img src="{{ asset('/') }}assets/admin/images/Untitled-1.jpg" alt="">
                <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Hello,</span> Marquez</h5>
            <p class="email">marquezzzz@mail.com</p>
        </div>
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">a z
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index-2.html">Dashboard Light</a></li>
                    <li><a href="index-3.html">Dashboard Dark</a></li>
                    <li><a href="my-wallets.html">Wallet</a></li>
                    <li><a href="tranasactions.html">Transactions</a></li>
                    <li><a href="coin-details.html">Coin Details</a></li>
                    <li><a href="portofolio.html">Portofolio</a></li>
                    <li><a href="market-capital.html">Market Capital</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('course.create') }}">Add Courses</a></li>
                    <li><a href="{{ route('course.index') }}">View Courses</a></li>

                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Campaign</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('campaign.create') }}">Add Campaign</a></li>
                    <li><a href="{{ route('campaign.index') }}">View Campaign</a></li>

                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Students</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">All Students</a></li>
                    <li><a href="#">Course Wise Students</a></li>

                </ul>
            </li>

        </ul>
    </div>
</div>
<!--**********************************
Sidebar end
***********************************-->
<!--**********************************
Sidebar end
***********************************-->
