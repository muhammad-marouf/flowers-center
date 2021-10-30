<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
@include('layouts.navigation')


<!-- Page Content -->
    <main>
        @yield('content')
    </main>

    @include('includes.footer')

</div>
@include('includes.scripts')
</body>
</html>
