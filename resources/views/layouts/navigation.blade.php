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

                <div class="col mt-10 mb-10 d-none d-md-flex">
                    <div class="mt-2">{{ Auth::user()->name }}</div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one header-sticky@">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('dashboard/flowers/create')}}">Add Flower</a></li>
                                <li><a href="{{url('dashboard/orders/confirm')}}">Confirm Order</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Header BOttom End -->

</div><!-- Header Section End -->