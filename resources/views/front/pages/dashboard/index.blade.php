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
            <div class="monthly-group">
                <div class="subscribtion-active">
                    <div class="active-btns">
                        <button type="button" class="btn btn-success">Active</button>
                    </div>
                    <h5>Monthly </h5>
                    <p>Subscription ID: #100010002</p>
                </div>
                <div class="bill-name-group mt-3">
                    <h5>Billing Date</h5>
                    <p>Next Billing on Nov 1, 2022</p>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
