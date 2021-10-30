@extends('app')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Order</h1>
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <form id="checkout-form" method="post" action="{{url('orders')}}" class="checkout-form">
                        @csrf
                        <div class="row row-50">
                            <div class="col-lg-7">
                                <input type="hidden" name="flower_id" value="{{$flower->id}}">
                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-20">
                                    <p class="checkout-title" style="float: left;margin-right: 130px">Flower Name:
                                        <span class="checkout-title"
                                              id="selected-flower-name"> {{$flower->name}} </span>
                                    </p>
                                    <p class="checkout-title">Price:
                                        <span class="checkout-title"
                                              id="selected-flower-price"> ${{$flower->price}} </span>
                                    </p>
                                    <h4 class="checkout-title">Sender Information</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Full Name*</label>
                                            <input name="client_name" type="text" placeholder="Full Name" required>
                                        </div>
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>City*</label>
                                            <select name="client_city" class="nice-select" required>
                                                <option value=""></option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Email Address*</label>
                                            <input name="email" type="email" placeholder="Email" required>
                                        </div>
                                        <div class="w-100"></div>
                                    </div>
                                    <h4 class="checkout-title">Recipient Information</h4>
                                    <div class="row">
                                        <div class="col-12 mb-5">
                                            <label>Full Name*</label>
                                            <input name="recipient_name" type="text" placeholder="Full Name"
                                                   style="width: 320px" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-5">
                                            <label>City*</label>
                                            <select name="delivery_branch_id" class="nice-select" required>
                                                <option value=""></option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Delivery Date*</label>
                                            <input name="delivery_date" type="datetime-local" placeholder="Date"
                                                   required>
                                        </div>
                                        <div class="col-12 mb-5">
                                            <label>Delivery Address*</label>
                                            <input name="delivery_address" type="text" placeholder="Address line"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="place-order">Submit</button>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-40">
                                        <h4 class="checkout-title">Cart Total</h4>
                                        <div class="checkout-cart-total">
                                            <h4>Product <span>Total</span></h4>
                                            <ul>
                                                <li> Flower Bouquet <span>${{$flower->price}}</span></li>
                                            </ul>
                                            <p>Delivery Fee <span>$50.00</span></p>
                                            <h4>Grand Total <span>${{$flower->price + 50}}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- Page Section End -->

@endsection

@section('scripts')
    <script>
        $('#checkout-form').submit(function () {
            event.preventDefault();
            let baseUrl = $('#base-url').attr('href');
            let form = this;
            $.ajax({
                type: 'post',
                url: `${baseUrl}/orders`,
                data: new FormData(this),
                processData: false,
                contentType: false,
                success(xhr) {
                    form.reset();
                    alert('Order Number is: ' + xhr.data.order_number + '\n Order Total: $' + xhr.data.total);
                }
            });
        });
    </script>
@endsection