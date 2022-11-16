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
                                <li class="breadcrumb-item" aria-current="page">Categories</li>
                                <li class="breadcrumb-item" aria-current="page">{{ $category->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="page-content course-sec">
        <div class="container">
            <div class="row">
                @foreach ($catcourses as $item)
                <div class="col-lg-3 col-md-3 col-6  d-flex">
                    @include('front.components.course-box')
                </div>
                @endforeach

            </div>
        </div>
    </section>

</div>
@endsection
