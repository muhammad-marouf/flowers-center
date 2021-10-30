<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one bg-theme-two">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col mt-10 mb-10 d-none d-md-flex">
                    <!-- Header Top Left Start -->
                    <div class="header-top-left">
                        <p>Welcome to {{config('app.name')}}</p>
                    </div><!-- Header Top Left End -->
                </div>

                <div class="col mt-10 mb-10">
                    <!-- Header Shop Links Start -->
                    <div class="header-top-right">

                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>


                    </div><!-- Header Shop Links End -->
                </div>

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one header-sticky@">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('flowers')}}">Flowers</a></li>
                                <li><a href="{{url('reviews')}}">Reviews</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Header BOttom End -->

</div><!-- Header Section End -->