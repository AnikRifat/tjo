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
                                <li class="breadcrumb-item" aria-current="page">Books</li>

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
                <div class="col-md-12">
                    <div class="settings-widget">
                        <div class="settings-inner-blk p-0">
                            <div class="sell-course-head comman-space">
                                <h3>Books</h3>
                                {{-- <p>Manage your courses and its update like live, draft and insight.</p> --}}
                            </div>
                            @foreach ($books as $item)

                            @include('front.components.book-box')

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>





            <div class="row">


            </div>
        </div>
    </section>

</div>
@endsection
