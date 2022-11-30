@extends('front.master.app')

@section('main-body')
<div class="main-body">

    <section class="home-slide d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-md-7">
                    <div class="home-slide-face aos" data-aos="fade-up">
                        <div class="home-slide-text ">
                            {{-- <h5>The Leader in Online Learning</h5> --}}
                            <h1>{!! $content->title !!}</h1>
                        </div>

                        <div class="trust-user">
                            <p class="text-small">{{ $content->sub_title }}</p>
                        </div>
                        {{-- <div class="play-buttons">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <a href="https://www.youtube.com/@teacherjackonline75243"
                                      class="btn btn-block btn-danger btn-lg">
                                        <i class="fa-brands mr-2 fa-youtube"></i> Youtube
                                    </a>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <a href="https://www.facebook.com/TeacherJackOnline"
                                      class="btn btn-block btn-dark btn-lg">
                                        <i class="fa-brands mr-2 fa-facebook"></i> Facebook
                                    </a>
                                </div>


                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div class="girl-slide-img aos" data-aos="fade-up">
                        <img src="{{ asset('/') }}assets/images/content/{{ $content->image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                        <div class="section-sub-head">
                            <span>About</span>
                            <h2>Teacher Jack</h2>
                        </div>
                    </div>
                    <div class="section-text aos aos-init aos-animate" data-aos="fade-up">
                        {!! $content->about !!}
                    </div>

                </div>
                <div class="col-lg-7 col-12">
                    <div class="about-video  pt-5">
                        <div class="container">
                            <div class="row">
                                @foreach ($videos as $item)
                                <div class="col-lg-3 col-md-4 col-6">
                                    @include('front.components.about-video')
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section trend-course" id="courses">
        <div class="container">
            <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                <div class="section-sub-head ">
                    <h2 class="text-center">Packages</h2>
                </div>
            </div>
            <div class="course-widget">
                <div class="row">
                    @foreach ($categories as $item)
                    <div class="col-lg-3 col-md-6 col-12">
                        @include('front.components.category-card')
                    </div>
                    @endforeach
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="{{ route('books') }}">
                            <div class="feature-box text-center ">
                                <div class="feature-bg">
                                    <div class="feature-header">
                                        <div class="feature-cont">
                                            <div class="feature-text">Book</div>
                                        </div>
                                        <div class="feature-icon">
                                            <img src="{{ asset('/') }}assets/images/category/book.jpg" alt="">
                                        </div>

                                    </div>
                                    {{-- <p>45 Instructors</p> --}}
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            {{--
            <div class="section-header aos pt-5 mt-5" data-aos="fade-up">

                <div class="section-sub-head">

                    <h2>UPCOMMING LIVE COURSES</h2>
                </div>
                <div class="all-btn all-category d-flex align-items-center">
                    <a href="course-list.html" class="btn btn-primary">All Courses</a>
                </div>
            </div>

            <div class="owl-carousel trending-course owl-theme aos" data-aos="fade-up">
                @foreach ($campaigns as $item)
                @include('front.components.course-card')
                @endforeach

            </div> --}}

        </div>
    </section>

    @if($testimonials)
    <section class="section trend-course v2" id="testimonials">
        <div class="container">
            <div class="section-header aos" data-aos="fade-up">
                <div class="section-sub-head">
                    <h2>What Students Say About Me</h2>
                </div>

            </div>


            <div class="feature-instructors">
                <div class="owl-carousel instructors-course owl-theme aos" data-aos="fade-up">
                    @foreach ($testimonials as $item)
                    <div class="instructors-widget">
                        <div class="instructors-content">
                            <div class="row">
                                <div class="col-3">
                                    <img class="text-image"
                                      src="{{ asset('/assets/images/testimonial') }}/{{ $item->image }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h5>{{ $item->name }}</h5>
                                    <p>{{ $item->title }}</p>
                                </div>
                                <div class="col-12"></div>
                                <span>{{ $item->text }}</span>
                            </div>


                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
    </section>
    @endif




    <section class="section master-skill skill" id="hit">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="section-header aos" data-aos="fade-up">
                        <div class="section-sub-head">
                            <h2>Steps for Success</h2>
                        </div>
                    </div>

                    <div class="course-widget ">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="course-full-width">
                                    <div class="blur-border course-radius align-items-center aos aos-init aos-animate"
                                      data-aos="fade-up">
                                        <div class="online-course d-flex align-items-center justify-content-center">
                                            <div class="course-img">
                                                <img src="{{ asset('/assets/front') }}/img/proccess/1.png" alt="">
                                            </div>
                                            <div class="course-inner-content">
                                                <p>Get a Schedule</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 d-flex">
                                <div class="course-full-width">
                                    <div class="blur-border course-radius aos aos-init aos-animate" data-aos="fade-up">
                                        <div class="online-course d-flex align-items-center">
                                            <div class="course-img">
                                                <img src="{{ asset('/assets/front') }}/img/proccess/2.png" alt="">
                                            </div>
                                            <div class="course-inner-content">
                                                <p>Fix a Time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 d-flex">
                                <div class="course-full-width">
                                    <div class="blur-border course-radius aos aos-init aos-animate" data-aos="fade-up">
                                        <div class="online-course d-flex align-items-center">
                                            <div class="course-img">
                                                <img src="{{ asset('/assets/front') }}/img/proccess/3.png" alt="">
                                            </div>
                                            <div class="course-inner-content">
                                                <p>Make Payment</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 d-flex">
                                <div class="course-full-width">
                                    <div class="blur-border course-radius aos aos-init aos-animate" data-aos="fade-up">
                                        <div class="online-course d-flex align-items-center justify-content-center">
                                            <div class="course-img">
                                                <img src="{{ asset('/assets/front') }}/img/proccess/4.png" alt="">
                                            </div>
                                            <div class="course-inner-content">
                                                <p>Attend Class</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 text-center">
                    <div class="career-img aos" data-aos="fade-up">
                        <img src="{{ asset('/') }}assets/front/img/join.png" style="
                        height: 20rem;
                        /* margin: 0px auto; */
                    " alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
@endsection
