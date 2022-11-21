<div class="course-box trend-box">
    <div class="product trend-product">
        <div class="product-img">
            <a href="{{ route('campaign.details',$item->id) }}">
                <img class="img-fluid" alt="" src="{{ asset('/') }}assets/images/course/{{ $item->thumbnail }}">
            </a>

            <div class="price">
                <h3>${{ $item->price }} <span>${{ $item->discounted_price }}</span></h3>
            </div>
        </div>
        <div class="product-content">
            <div class="course-group d-flex">
            </div>
            <h3 class="title"><a href="{{ route('campaign.details',$item->id) }}">{{ $item->name }}</a></h3>
            <div class="course-info d-flex align-items-center">
                <div class="rating-img d-flex align-items-center">
                    <img src="{{ asset('/') }}assets/front/img/icon/icon-01.svg" alt="" class="img-fluid">
                    <p>{{ $item->start_date  }}</p>
                </div>
                <div class="course-view d-flex align-items-center">
                    <img src="{{ asset('/') }}assets/front/img/icon/icon-02.svg" alt="" class="img-fluid">
                    <p>{{ $item->end_date }}</p>
                </div>
            </div>

            <div class="all-btn all-category d-flex align-items-center">
                <a href="{{ route('course.details',$item->id) }}" class="btn btn-primary btn-block">Enroll NOW</a>
            </div>
        </div>
    </div>
</div>
