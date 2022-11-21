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
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Chekouts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('checkout.index') }}">View Checkouts</a></li>
                    {{-- <li><a href="{{ route('checkout.index') }}">View Checkouts</a>
            </li> --}}

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
                <span class="nav-text">live</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('live.create') }}">Add live</a></li>
                <li><a href="{{ route('live.index') }}">View live</a></li>

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
                <span class="nav-text">category</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('category.create') }}">create category</a></li>
                <li><a href="{{ route('category.index') }}">View category</a></li>

            </ul>
        </li>

        <li>
            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-144-layout"></i>
                <span class="nav-text">Testimonial</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('testimonial.create') }}">create testimonial</a></li>
                <li><a href="{{ route('testimonial.index') }}">View testimonial</a></li>

            </ul>
        </li>
        <li>
            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-144-layout"></i>
                <span class="nav-text">video</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('video.create') }}">create video</a></li>
                <li><a href="{{ route('video.index') }}">View video</a></li>

            </ul>
        </li>
        <li>
            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-144-layout"></i>
                <span class="nav-text">Website</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('content.index') }}">Content</a></li>
                <li><a href="{{ route('contact.index') }}">contact</a></li>

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
