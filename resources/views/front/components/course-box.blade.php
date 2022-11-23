<div class="course-box trend-box w-100">
    <div class="product trend-product">
        <div class="product-img">
            <a href="{{ route('course.details',$item->id) }}">
                <img class="img-fluid" alt="" src="{{ asset('/') }}assets/images/course/{{ $item->image }}">
            </a>
            <div class="price">
                <h3>${{ $item->price }}</h3>
            </div>
        </div>
        <div class="product-content">

            <h3 class="title"><a href="{{ route('course.details',$item->id) }}">{{ $item->title }}</a></h3>
            <div class="course-info d-flex align-items-center">
                <div class="rating-img d-flex align-items-center">
                    <img src="{{ asset('/') }}assets/front/img/icon/icon-01.svg" alt="" class="img-fluid">
                    <p>{{ $item->classes  }} class</p>
                </div>
                <div class="course-view d-flex align-items-center">
                    <img src="{{ asset('/') }}assets/front/img/icon/icon-02.svg" alt="" class="img-fluid">
                    <p>{{ $item->duration }} Hour</p>
                </div>
            </div>
            <div class="all-btn all-category d-flex align-items-center">
                <a href="{{ route('course.details',$item->id) }}" class="btn btn-primary btn-block">Details</a>
            </div>
        </div>
    </div>
</div>
