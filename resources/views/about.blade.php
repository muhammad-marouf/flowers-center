@extends('app')

@section('content')
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Home</h1>
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">
                <div class="contact-info-wrap col-md-6 col-12 mb-40">
                    <h3>About the Company</h3>
                    <p>Flowers-Center has been a leader in the floral industry for over a century.We provide our
                        services
                        widely in Syrian territory , We are a private
                        equity-backed
                        company with one of the largest florist networks in the world, supported by the iconic Lotus
                        Flower©
                        logo displayed in all our floral shops. We partner with local florists to hand-craft floral
                        arrangements available for same-day delivery. In addition to delivering flowers, we support
                        locally-owned retail florists by providing technology, marketing, and digital services to
                        members of
                        our florist network. For all of life's occasions and everyday moments.
                        Let Flowers-Center co. be your first choice for flowers.
                    </p>
                    <hr>
                    <p>
                    <span style="font-weight: bold">Area Served</span><br>
                    <br>
                    We deliver to the following Cities:<br>
                        @foreach($branches as $branch)
                            - {{$branch->name}}<br>
                        @endforeach
                    </p>
                    <ul class="contact-info">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <p>G72G+73M, Damascus, Syria<br>( Main Center )</p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <p><a href="#">+01 235 567 89</a><a href="#">+01 235 286 65</a></p>
                        </li>
                        <li>
                            <i class="fa fa-globe"></i>
                            <p><a href="#">flowers-center@gmail.com</a><a href="#">www.flowers-center.com</a></p>
                        </li>
                    </ul>
                </div>
                <div class="contact-form-wrap col-md-6 col-12 mb-40">
                    <h3>Leave a Message</h3>
                    <p>If you have any questions or need more information, please call or email us. We're always here to
                        serve you and make your flower-sending experience a pleasure.endence Day, and Labor Day.</p>
                    <form method="post" action="{{url('contact_us')}}">
                        @csrf
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-30"><input type="text" name="name"
                                                                          placeholder="Your Name">
                                </div>
                                <div class="col-lg-6 col-12 mb-30"><input type="email" name="email"
                                                                          placeholder="Email Address"></div>
                                <div class="col-12 mb-30"><textarea name="message" placeholder="Message"></textarea>
                                </div>

                            </div> <div class="col-12"><input type="submit" value="send"></div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div><!-- Page Section End -->

@endsection