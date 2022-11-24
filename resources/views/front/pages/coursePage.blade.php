@extends('front.master.app')
@section('main-body')
<div class="main-body">

    <section class="page-content course-sec">
        <div class="container">
            <div class="row">
                @foreach ($courses as $item)
                <div class="col-lg-3 col-md-3 col-6  d-flex">
                    @include('front.components.course-box')
                </div>
                @endforeach

            </div>
        </div>
    </section>

</div>
@endsection
