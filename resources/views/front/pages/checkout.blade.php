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
                                <li class="breadcrumb-item" aria-current="page">{{ $item->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="course-content cart-widget">
        <div class="container">
            <div class="student-widget">
                <div class="student-widget-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-group">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 d-flex">
                                        <div class="course-box course-design list-course d-flex">
                                            <div class="product">
                                                <div class="product-img">
                                                    <a href="course-details.html">
                                                        <img class="img-fluid" alt=""
                                                          src="{{ asset('/') }}assets/images/course/{{ $item->image }}">
                                                    </a>
                                                    <div class="price">
                                                        <h3 class="free-color">
                                                            {{ $item->price }}
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="head-course-title">
                                                        <h3 class="title"><a>{{ $item->title }}</a></h3>
                                                    </div>
                                                    <div
                                                      class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                        <div class="rating-img d-flex align-items-center">
                                                            <img src="{{ asset('/assets/front') }}/img/icon/icon-01.svg"
                                                              alt="">
                                                            <p>{{ $item->classes }} Classes</p>
                                                        </div>
                                                        <div class="course-view d-flex align-items-center">
                                                            <img src="{{ asset('/assets/front') }}/img/icon/icon-02.svg"
                                                              alt="">
                                                            <p>{{ $item->duration }} Hours</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p>{{ $item->preview }}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @if ($item->haslive)
                            <div class="cart-total">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="cart-subtotal">
                                            <p>Payable ammount <small class="small text-info">(pay with $
                                                    currency)</small><span><input type="text" id="payment_box"
                                                      class="form-control"></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="check-outs">

                                            <div id="paypal-button-container"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="cart-total">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="cart-subtotal">
                                            <p>Payable ammount : $
                                                {{ $item->price }}<span><input type="text" id="payment_box"
                                                      class="form-control" value="{{ $item->price }}" readonly
                                                      hidden></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="check-outs">

                                            <div id="paypal-button-container"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @auth
        <form action="{{ route('checkout.store') }}" id="checkout" method="post">
            @csrf
            <input type="hidden" name="course_id" value="{{ $item->course_id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </form>
        @endauth

    </section>
</div>
@endsection
@section('script')
<script
  src="https://www.paypal.com/sdk/js?client-id=AdemfddwdPxaI8XdXZqPK5dKX1wzM3-PkDzVT1Or9kbu6c7LfAvJ9pqPVM0xxOOZaFCyH00uFlNFxvK5&currency=USD">
</script>
<script>
    paypal.Buttons({

        //
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            let ammount = document.getElementById('payment_box').value
            console.log(ammount)
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: ammount // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            document.getElementById("checkout").submit();
            // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  ;
          });
        }
      }).render('#paypal-button-container');
</script>

@endsection
