@extends('front.master.app')

@section('main-body')
<div class="main-body">
    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-md-4 theiaStickySidebar">
                    @include('front.pages.dashboard.inc.sidebar')
                </div>


                <div class="col-xl-9 col-md-8">
                    @yield('dashboard-body')
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
