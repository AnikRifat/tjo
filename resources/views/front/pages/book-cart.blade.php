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
    <section class="book-content cart-widget">
        <div class="container">
            <div class="student-widget">
                <div class="student-widget-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-group">
                                <div class="comman-space bdr-bottom-line">
                                    <div class="instruct-review-blk ">
                                        <div class="review-item">
                                            <div class="row">
                                                <div class="col-lg-2 col-12"><img
                                                      src="{{ asset('/assets/images/book') }}/{{ $item->image }}"
                                                      alt="img" class="img-fluid">
                                                </div>
                                                <div class="col-lg-10 col-12">
                                                    <div class="instructor-wrap border-0 m-0">
                                                        <div class="about-instructor">
                                                            <div class="instructor-detail">
                                                                <h5><a
                                                                      href="instructor-profile.html">{{ $item->name }}</a>
                                                                </h5>
                                                                <p> <span><strong>Price :</strong></span> $
                                                                    {{ $item->price }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="rev-info">“ {{ $item->description }} “</p>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

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

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @auth
        <form action="{{ route('checkout.store') }}" id="checkout" method="post">
            @csrf
            <input type="hidden" name="book_id" value="book-{{ $item->book_id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </form>
        @endauth

    </section>
</div>
@endsection
@section('script')
<script
  src="https://www.paypal.com/sdk/js?client-id=AV4kba7dUEZTPqNYt06sKoeBKzokMtzfNLFwV92NluMXln3ttMs6_CTuqjq-SylMFvOKOU_Z05_x9v95&currency=USD">
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
