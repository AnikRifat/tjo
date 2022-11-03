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
                            <h1>Learn English The American Way</h1>
                        </div>

                        <div class="trust-user">
                            <p class="text-small">Take Lessons from Teacher Jack and
                                Speak Like
                                a Native English Speaker</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div class="girl-slide-img aos" data-aos="fade-up">
                        <img src="{{ asset('/') }}assets/front/img/object.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-us">
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
                        <p>Teacher Jack is experienced and has taught students from various countries over the past 7
                            years,
                            including China, South Korea, Mexico and the United States of America. Teacher Jack is
                            friendly,
                            helpful, open minded and affordable. He goes the extra mile to ensure student understanding
                            of
                            the lessons. He travels a lot and interacts with people from different background. He is
                            knowledgeable and knows exactly which student requires what level of training. He is easily
                            reachable and is always ready to help his students</p>
                    </div>

                </div>
                <div class="col-lg-7 col-12">
                    <div class="about-video  pt-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                                <div class="col-lg-3">
                                    @include('front.components.about-video')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section trend-course">
        <div class="container">
            <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                <div class="section-sub-head ">
                    <span>Courses</span>
                    <h2 class="text-center">PRE - RECORDED COURSES</h2>
                </div>
            </div>
            <div class="course-widget">
                <div class="row">
                    @include('front.components.course-simple')
                    @include('front.components.course-simple')
                    @include('front.components.course-simple')
                    @include('front.components.course-simple')
                    @include('front.components.course-simple')
                    <div class="col-lg-6 col-md-12">
                        <div class="course-full-width">
                            <div class="blur-border course-radius align-items-center aos aos-init aos-animate"
                              data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ asset('/') }}assets/front/img/pencil-icon.svg" alt="">
                                    </div>
                                    <div class="course-inner-content">
                                        <h4>Browse more ......</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-header aos pt-5 mt-5" data-aos="fade-up">
                <div class="section-sub-head">

                    <h2>UPCOMMING LIVE COURSES</h2>
                </div>
                <div class="all-btn all-category d-flex align-items-center">
                    <a href="course-list.html" class="btn btn-primary">All Courses</a>
                </div>
            </div>

            <div class="owl-carousel trending-course owl-theme aos" data-aos="fade-up">

                @include('front.components.course-card')
                @include('front.components.course-card')
                @include('front.components.course-card')
                @include('front.components.course-card')
                @include('front.components.course-card')
            </div>

        </div>
    </section>
    <section class="section master-skill">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="section-header aos" data-aos="fade-up">
                        <div class="section-sub-head">
                            <span class="display-4">How it works</span>
                            <h2>Master the skills to drive your career</h2>
                        </div>
                    </div>

                    <div class="hiw-group aos" data-aos="fade-up">
                        <div class="row">
                            <div class="col0-lg-3 col-md-6">
                                <div class="feature-box text-center ">
                                    <div class="feature-bg">
                                        <div class="feature-header">
                                            <div class="feature-icon">
                                                <img src="{{ asset('/') }}assets/front/img/proccess/1.png" alt="">
                                            </div>
                                            <div class="feature-cont">
                                                <div class="feature-text">Angular Development</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col0-lg-3 col-md-6">
                                <div class="feature-box text-center ">
                                    <div class="feature-bg">
                                        <div class="feature-header">
                                            <div class="feature-icon">
                                                <img src="{{ asset('/') }}assets/front/img/proccess/2.png" alt="">
                                            </div>
                                            <div class="feature-cont">
                                                <div class="feature-text">Angular Development</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col0-lg-3 col-md-6">
                                <div class="feature-box text-center ">
                                    <div class="feature-bg">
                                        <div class="feature-header">
                                            <div class="feature-icon">
                                                <img src="{{ asset('/') }}assets/front/img/proccess/3.png" alt="">
                                            </div>
                                            <div class="feature-cont">
                                                <div class="feature-text">Angular Development</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col0-lg-3 col-md-6">
                                <div class="feature-box text-center ">
                                    <div class="feature-bg">
                                        <div class="feature-header">
                                            <div class="feature-icon">
                                                <img src="{{ asset('/') }}assets/front/img/proccess/4.png" alt="">
                                            </div>
                                            <div class="feature-cont">
                                                <div class="feature-text">Angular Development</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 d-flex align-items-end">
                    <div class="career-img aos" data-aos="fade-up">
                        <img src="{{ asset('/') }}assets/front/img/join.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('front.include.footer')

</div>
@endsection
