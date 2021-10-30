@extends('layouts.app')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Add Flower</h1>
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">

                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form method="post" action="{{url('flowers')}}" class="checkout-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-50">

                            <div class="col-lg-7">

                                <div id="billing-form" class="mb-20">
                                    <h4 class="checkout-title">Flower Details</h4>

                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Branch*</label>
                                            <select class="nice-select" name="branch_id">
                                                <option value=""></option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Occasion*</label>
                                            <select class="nice-select" name="occasion_id">
                                                <option value=""></option>
                                                @foreach($occasions as $occasion)
                                                    <option value="{{$occasion->id}}">{{$occasion->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Flower Name*</label>
                                            <input type="text" placeholder="Flower Name" name="name">
                                        </div>


                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Price*</label>
                                            <input type="number" min="0" placeholder="Price" name="price">
                                        </div>

                                        <div class="col-12 mb-5">
                                            <label>Description</label>
                                            <textarea rows="3" placeholder="Description......"
                                                      name="description"></textarea>
                                        </div>

                                        <div class="col-12 mb-5">
                                            <div class="input-file-container">
                                                <input class="input-file" accept=".jpg,.png" id="my-file"
                                                       type="file"
                                                       name="image">
                                                <label tabindex="0" for="my-file" class="input-file-trigger">Select
                                                    a
                                                    file...</label>
                                            </div>
                                            <p class="file-return"></p>
                                        </div>

                                        <div class="col-12 mb-5">
                                            <button type="submit" class="place-order">Save</button>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection