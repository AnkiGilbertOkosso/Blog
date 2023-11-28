<!doctype html>
<html lang="en">
@include('partials._head')
    <body>

        @include('partials._navbar')
        <!-- header container starts -->
        <div class="container mt-4">
            @include('partials._messages')
            @yield('content')
            @include('partials._footer')
        </div>
        <!-- header container ends -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>