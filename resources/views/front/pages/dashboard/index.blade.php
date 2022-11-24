@extends('front.pages.dashboard.app.app')
@section('dashboard-body')
<div class="settings-widget profile-details">
    <div class="settings-menu p-0">
        <div class="profile-heading subscription-group d-flex align-items-center">
            <div class="subscription-name">
                <h3>My Subscriptions</h3>
                <p>Here is list of package/product that you have subscribed.</p>
            </div>
        </div>
        <div class="monthly-subscribtion comman-space border-line">
            @if(count($enroledCourses) > 0)
            @foreach ($enroledCourses as $item)
            <div class="monthly-group">
                <div class="subscribtion-active">
                    <div class="active-btns">
                        @if ($item->type == 0)
                        <span class="badge light badge-primary">pending</span>
                        @elseif ($item->type == 1)
                        <span class="badge light badge-success">approved</span>
                        @else
                        <span class="badge light badge-danger">declined</span>
                        @endif
                    </div>
                    <h2>Course Title: {{ $item->course->title }} </h2>
                    <p></p>
                </div>
                <div class="bill-name-group mt-3">
                    {{-- <h5>Billing Date</h5> --}}
                    <p>{{ $item->course->preview }}</p>
                </div>

            </div>
            @endforeach
            @else
            <h5>no subscriptions yet</h5>
            @endif


        </div>

    </div>
</div>
@endsection
