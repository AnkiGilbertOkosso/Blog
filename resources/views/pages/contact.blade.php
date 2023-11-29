@extends('main')

@section('title', '| Contact Us')

@section('content')
    <div class="row">
        <!-- Left Column: Contact Form -->
        <div class="col-md-8">
            <h2>Contact Us</h2>
            <p>Have questions, suggestions, or just want to say hello? Fill out the form below to get in touch with us.</p>

            <!-- Contact Form -->
            <form action="/contact" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Your Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Right Column: Contact Information -->
        <div class="col-md-4">
            <h2>Contact Information</h2>
            <p>Email: info@laravelblog.com</p>
            <p>Phone: +1 (123) 456-7890</p>
            <!-- Add more contact information as needed -->
        </div>
    </div>
@endsection