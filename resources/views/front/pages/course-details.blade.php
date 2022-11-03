@extends('front.master.app')
@section('style')



@endsection
@section('main-body')
<div class="main-body">

    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Courses</li>
                                <li class="breadcrumb-item" aria-current="page">All Courses</li>
                                <li class="breadcrumb-item" aria-current="page">The Complete Web Developer
                                    Course 2.0</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="inner-banner">
        <div class="container">
            <div class="countdown-container">
                <div class="countdown-el days-c">
                    <p class="big-text" id="day"></p>
                    <span>Days</span>
                </div>
                <div class="countdown-el hours-c">
                    <p class="big-text" id="hour"></p>
                    <span>Hours</span>
                </div>
                <div class="countdown-el mins-c">
                    <p class="big-text" id="minute"></p>
                    </p>
                    <span>Minutes</span>
                </div>
                <div class="countdown-el mins-c">
                    <p class="big-text" id="second"></p>
                    </p>
                    <span>Second</span>
                </div>
            </div>

        </div>
    </div>


    <section class="page-content course-sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="video-sec vid-bg">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="https://www.youtube.com/embed/1trvO6dqQUI" class="video-thumbnail"
                                          data-fancybox="">
                                            <div class="play-icon">
                                                <i class="fa-solid fa-play"></i>
                                            </div>
                                            <img class="" src="{{ asset('/') }}assets/front/img/video.jpg" alt="">
                                        </a>
                                        <div class="video-details">
                                            <div class="course-fee">
                                                <h3>$99.00</h3>
                                            </div>

                                            <a href="checkout.html" class="btn btn-enroll w-100">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h2>The Complete Web Developer Course 2.0</h2>
                                    <p>Learn Web Development by building 25 websites and mobile apps using HTML, CSS,
                                        Javascript, PHP, Python, MySQL & more!</p>
                                    <div class="course-info border-bottom-0 m-0 p-0">
                                        <div class="cou-info py-2">
                                            <img src="{{ asset('/') }}assets/front/img/icon/icon-01.svg" alt="">
                                            <p>12+ Lesson</p>
                                        </div>
                                        <div class="cou-info py-2">
                                            <img src="{{ asset('/') }}assets/front/img/icon/timer-icon.svg" alt="">
                                            <p>9hr 30min</p>
                                        </div>
                                        <div class="cou-info py-2">
                                            <img src="{{ asset('/') }}assets/front/img/icon/people.svg" alt="">
                                            <p>32 students enrolled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="topic"
                      style="background-image: url({{ asset('/assets/front/image/back.jpg') }});background-size: cover;background-repeat: no-repeat;">
                        <div class="row ">
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <h5>Intriducing</h5>
                                    <h2>Teacher Jack Online</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of
                                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                {{-- <img src="{{ asset('/assEstyEets/front/image/tjo.png') }}" alt=""
                                class="img-fluid">
                                --}}
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-8">

                    <div class="card overview-sec">
                        <div class="card-body">
                            <h5 class="subs-title">Overview</h5>

                            <h6>Course Description</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged.</p>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h6>What you'll learn</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Become a UX designer.</li>
                                        <li>You will be able to add UX designer to your CV</li>
                                        <li>Become a UI designer.</li>
                                        <li>Build & test a full website design.</li>
                                        <li>Build & test a full mobile app.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Learn to design websites & mobile phone apps.</li>
                                        <li>You'll learn how to choose colors.</li>
                                        <li>Prototype your designs with interactions.</li>
                                        <li>Export production ready assets.</li>
                                        <li>All the techniques used by UX professionals</li>
                                    </ul>
                                </div>
                            </div>
                            <h6>Requirements</h6>
                            <ul class="mb-0">
                                <li>You will need a copy of Adobe XD 2019 or above. A free trial can be
                                    downloaded from Adobe.</li>
                                <li>No previous design experience is needed.</li>
                                <li class="mb-0">No previous Adobe XD skills are needed.</li>
                            </ul>
                        </div>
                    </div>


                    <div class="card content-sec">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="subs-title">Course Content</h5>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <h6>92 Lectures 10:56:11</h6>
                                </div>
                            </div>
                            <div class="course-card">
                                <h6 class="cou-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapseOne"
                                      aria-expanded="false">In which areas do you operate?</a>
                                </h6>
                                <div id="collapseOne" class="card-collapse collapse" style="">
                                    <ul>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.1
                                                Introduction to the User Experience
                                                Course</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.2
                                                Exercise: Your first design challenge
                                            </p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.3 How to
                                                solve the previous exercise</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.3 How to
                                                solve the previous exercise</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.5 How to
                                                use text layers effectively</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-card">
                                <h6 class="cou-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#course2"
                                      aria-expanded="false">The Brief</a>
                                </h6>
                                <div id="course2" class="card-collapse collapse" style="">
                                    <ul>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.1
                                                Introduction to the User Experience
                                                Course</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.2
                                                Exercise: Your first design challenge
                                            </p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.3 How to
                                                solve the previous exercise</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.3 How to
                                                solve the previous exercise</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.5 How to
                                                use text layers effectively</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-card">
                                <h6 class="cou-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#course3"
                                      aria-expanded="false">Wireframing Low Fidelity</a>
                                </h6>
                                <div id="course3" class="card-collapse collapse" style="">
                                    <ul>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.1
                                                Introduction to the User Experience
                                                Course</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.2
                                                Exercise: Your first design challenge
                                            </p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.3 How to
                                                solve the previous exercise</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.3 How to
                                                solve the previous exercise</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture1.5 How to
                                                use text layers effectively</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course-card">
                                <h6 class="cou-title mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#coursefour"
                                      aria-expanded="false">Type, Color & Icon Introduction</a>
                                </h6>
                                <div id="coursefour" class="card-collapse collapse" style="">
                                    <ul>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture4.1
                                                Introduction to the User Experience
                                                Course</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture4.2
                                                Exercise: Your first design challenge
                                            </p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture4.3 How to
                                                solve the previous exercise</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture4.4 How to
                                                solve the previous exercise</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p><img src="{{ asset('/') }}assets/front/img/icon/play.svg" alt=""
                                                  class="me-2">Lecture4.5 How to
                                                use text layers effectively</p>
                                            <div>
                                                <a href="javascript:;">Preview</a>
                                                <span>02:53</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4">
                    <div class="sidebar-sec">




                        <div class="card include-sec">
                            <div class="card-body">
                                <div class="cat-title">
                                    <h4>Includes</h4>
                                </div>
                                <ul>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/import.svg" class="me-2" alt="">
                                        11 hours
                                        on-demand video</li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/play.svg" class="me-2" alt="">
                                        69 downloadable
                                        resources</li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/key.svg" class="me-2" alt="">
                                        Full lifetime
                                        access</li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/mobile.svg" class="me-2" alt="">
                                        Access on
                                        mobile and TV</li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/cloud.svg" class="me-2" alt="">
                                        Assignments
                                    </li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/teacher.svg" class="me-2"
                                          alt=""> Certificate
                                        of Completion</li>
                                </ul>
                            </div>
                        </div>


                        <div class="card feature-sec">
                            <div class="card-body">
                                <div class="cat-title">
                                    <h4>Includes</h4>
                                </div>
                                <ul>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/users.svg" class="me-2" alt="">
                                        Enrolled:
                                        <span>32 students</span>
                                    </li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/timer.svg" class="me-2" alt="">
                                        Duration:
                                        <span>20 hours</span>
                                    </li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/chapter.svg" class="me-2"
                                          alt=""> Chapters:
                                        <span>15</span>
                                    </li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/video.svg" class="me-2" alt="">
                                        Video:<span>
                                            12 hours</span></li>
                                    <li><img src="{{ asset('/') }}assets/front/img/icon/chart.svg" class="me-2" alt="">
                                        Level:
                                        <span>Beginner</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

@section('script')
<script>
    var deadline = new Date("november 15, 2022 15:37:25").getTime();
var x = setInterval(function() {
   var currentTime = new Date().getTime();
   var t = deadline - currentTime;
   var days = Math.floor(t / (1000 * 60 * 60 * 24));
   var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
   var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
   var seconds = Math.floor((t % (1000 * 60)) / 1000);
   document.getElementById("day").innerHTML =days ;
   document.getElementById("hour").innerHTML =hours;
   document.getElementById("minute").innerHTML = minutes;
   document.getElementById("second").innerHTML =seconds;
   if (t < 0) {
      clearInterval(x);
      document.getElementById("time-up").innerHTML = "TIME UP";
      document.getElementById("day").innerHTML ='0';
      document.getElementById("hour").innerHTML ='0';
      document.getElementById("minute").innerHTML ='0' ;
      document.getElementById("second").innerHTML = '0';
   }
}, 1000);

</script>
@endsection
