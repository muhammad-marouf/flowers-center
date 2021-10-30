@extends('layouts.app')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Confirm Order</h1>
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <form id="checkout-form" method="post" action="{{url('dashboard/orders/confirm')}}" class="checkout-form">
                        @csrf
                        <div class="row row-50">
                            <div class="col-lg-7">
                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-20">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Branch</label>
                                                <select class="nice-select" name="paying_branch_id" required>
                                                <option value=""></option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Order Number*</label>
                                            <input name="order_number" type="text" placeholder="Order Number" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="place-order">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- Page Section End -->

@endsection