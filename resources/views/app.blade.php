<!doctype html>
<html class="no-js" lang="en">

@include('includes.head')


<body>

<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</div>
@include('includes.scripts')

@yield('scripts')
</body>
