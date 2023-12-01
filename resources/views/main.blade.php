<!DOCTYPE html>
<html lang="en">

    <!-- Include the head section -->
    @include('partials._head')

    <body>

        <!-- Include the navigation bar -->
        @include('partials._navbar')

        <!-- Header Container Starts -->
        <div class="container mt-4">
            <!-- Include any messages or notifications -->
            @include('partials._messages')

            <!-- Yield the main content section -->
            @yield('content')

            <!-- Include the footer section -->
            @include('partials._footer')
        </div>
        <!-- Header Container Ends -->

        <!-- Include Bootstrap JavaScript from CDN -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}

    </body>

</html>
