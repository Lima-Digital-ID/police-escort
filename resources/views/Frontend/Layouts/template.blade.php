<!DOCTYPE html>
<html lang="en">

@include('Frontend.Components.head')

<body>
    <!-- ======= Header ======= -->
    @include('Frontend.Components.header')
    <!-- End Header -->

    @yield('content')

    @include('Frontend.Components.footer')
    @include('Frontend.Components.js')


</body>

</html>
