<div class="col-lg-6 col-md-12">
    <a href="{{ route('course.details',$item->id) }}">
        <div class="course-full-width">
            <div class="blur-border course-radius align-items-center aos aos-init aos-animate" data-aos="fade-up">
                <div class="online-course d-flex align-items-center">
                    <div class="course-img">
                        <img src="{{ asset('/') }}assets/front/img/pencil-icon.svg" alt="">
                    </div>
                    <div class="course-inner-content">
                        <h4>{{ $item->title }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
