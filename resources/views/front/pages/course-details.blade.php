@extends('front.master.app')
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
                                <li class="breadcrumb-item" aria-current="page">{{ $course->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($islive)
    <div class="inner-banner" style="
    padding: 45px 0;
    background: url({{ asset('/assets/images') }}/course/{{ $islive->banner }});
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
">
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

    {{-- @else --}}

    @endif

    <section class="page-content course-sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="video-sec vid-bg">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="{{ $course->intro }}" class="video-thumbnail" data-fancybox="">
                                                    <div class="play-icon">
                                                        <i class="fa-solid fa-play"></i>
                                                    </div>
                                                    <img class=""
                                                      src="{{ asset('/') }}assets/images/course/{{ $course->image }}"
                                                      alt="">
                                                </a>
                                                <div class="video-details">
                                                    <div class="course-fee">
                                                        <h3>${{ $course->price }}</h3>
                                                    </div>

                                                    <a href="checkout.html" class="btn btn-enroll w-100">Enroll Now</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <h2>{{ $course->title }}</h2>
                                                <p>{{ $course->preview }}</p>
                                                <div class="course-info border-bottom-0 m-0 p-0">
                                                    <div class="cou-info py-2">
                                                        <img class="top-ic"
                                                          src="{{ asset('/') }}assets/front/img/icon/icon-01.svg"
                                                          alt="">
                                                        <p>{{ $course->classes }}</p>
                                                    </div>
                                                    <div class="cou-info py-2">
                                                        <img class="top-ic"
                                                          src="{{ asset('/') }}assets/front/img/icon/timer-icon.svg"
                                                          alt="">
                                                        <p>{{ $course->duration }}</p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <img src="{{ asset('/') }}assets/images/course/{{ $course->cover_image }}" alt=""
                              class="img-fluid">
                        </div>
                        <div class="col-lg-12">

                            <div class="card overview-sec">
                                <div class="card-body">
                                    <h5 class="subs-title">Overview</h5>

                                    <div>
                                        {!! $course->overview !!}
                                    </div>
                                </div>
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
@if($islive)
<script>
    // var end_date =
    var deadline = new Date("{{ $islive->end_date }}").getTime();
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
@endif

@endsection
