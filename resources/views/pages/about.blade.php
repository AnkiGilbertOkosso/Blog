@extends('main')

@section('title', '| About Us')

@section('content')
    <div class="row">
        <!-- Left Column: About Laravel Blog -->
        <div class="col-md-8">
            <h2>About Us</h2>
            <p>Welcome to Laravel Blog, your go-to destination for insightful and engaging content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Our team of passionate writers is dedicated to bringing you the latest news, trends, and in-depth analysis across various topics. Whether you're a seasoned developer or a curious learner, you'll find valuable resources and thought-provoking articles here at Laravel Blog.</p>
            <p>Thank you for being part of our community. Explore our blog, share your thoughts, and stay tuned for more exciting content!</p>
        </div>

        <!-- Right Column: Meet the Team -->
        <div class="col-md-4">
            <h2>Meet the Team</h2>
            <!-- Team Member Card -->
            <div class="card mb-3">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text">Web Developer</p>
                </div>
            </div>
        </div>
    </div>
@endsection