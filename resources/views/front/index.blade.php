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
                        {!! $content->about !!}
                    </div>

                </div>
                <div class="col-lg-7 col-12">
                    <div class="about-video  pt-5">
                        <div class="container">
                            <div class="row">
                                @foreach ($videos as $item)
                                <div class="col-lg-3">
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
    <section class="category">

        <div class="container">

        </div>
    </section>

    <section class="section trend-course">
        <div class="container">
            <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                <div class="section-sub-head ">
                    <h2 class="text-center">Courses You can Buy</h2>
                </div>
            </div>
            <div class="course-widget">
                <div class="row">
                    @foreach ($categories as $item)
                    <div class="col-md-4">
                        @include('front.components.category-card')
                    </div>
                    @endforeach

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
    <section class="section user-love">
        <div class="container">
            <div class="section-header white-header aos" data-aos="fade-up">
                <div class="section-sub-head feature-head text-center">
                    <span>Check out these real reviews</span>
                    <h2>Users-love-us Don't take it from us.</h2>
                </div>
            </div>
        </div>
    </section>

    @if($testimonials)
    <section class="testimonial-four">
        <div class="review">
            <div class="container">
                <div class="testi-quotes">
                    <img src="{{ asset('/') }}assets/front/img/qute.png" alt="">
                </div>
                <div class="mentor-testimonial lazy slider aos" data-aos="fade-up" data-sizes="50vw ">
                    @foreach ($testimonials as $item)
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ asset('/') }}assets/front/img/qute-01.png" alt="">
                                    </div>
                                    <p>{{ $item->text }}</p>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="instructor-profile.html"><img
                                                  src="{{ asset('/') }}assets/images/testimonial/{{ $item->image }}"
                                                  alt="" class="img-fluid"></a>
                                        </div>
                                        <h3><a href="instructor-profile.html">{{ $item->name }}</a></h3>
                                        <span>{{ $item->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="section master-skill">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="section-header aos" data-aos="fade-up">
                        <div class="section-sub-head">
                            <h2>Master the skills to drive your career</h2>
                        </div>
                    </div>
                    {{--
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
                    <div class="feature-text">Get a Schedule</div>
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
                    <div class="feature-text">Fix a TIme</div>
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
                    <div class="feature-text">Make payment</div>
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
                    <div class="feature-text">Attend Class</div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div> --}}
</div>
<div class="col-lg-5 col-md-12 d-flex align-items-end">
    <div class="career-img aos" data-aos="fade-up">
        <img src="{{ asset('/') }}assets/front/img/join.png" alt="" class="img-fluid">
    </div>
</div>
</div>
</div>
</section>



</div>
@endsection