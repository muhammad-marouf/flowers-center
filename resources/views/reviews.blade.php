@extends('app')

@section('content')
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Reviews</h1>
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">
                <div class="contact-info-wrap col-md-6 col-12 mb-40" style="height: 500px;overflow-y: auto">
                    @forelse($reviews as $review)
                        <h3>{{$review->name}}</h3>
                        <p>{{$review->body}}</p>
                        <hr>
                        @empty
                        <h3 class="text-center">No Reviews</h3>
                    @endforelse
                </div>
                <div class="contact-form-wrap col-md-6 col-12 mb-40">
                    <h3>Leave a Review</h3>
                    <form method="post" action="{{url('reviews')}}">
                        @csrf
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-30"><input type="text" name="name"
                                                                          placeholder="Your Name">
                                </div>

                                <div class="col-12 mb-30"><textarea name="body" placeholder="Message"></textarea>
                                </div>

                            </div>
                            <div class="col-12"><input type="submit" value="send"></div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div><!-- Page Section End -->

@endsection