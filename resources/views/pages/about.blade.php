@extends('layout')

@section('content')

    </header>
    <div class="container mx-auto flex h-full justify-center mt-8 relative">
        <section class="flex flex-col md:flex-row gap-4 p-4 w-full justify-center">
            <div
                class="bg-blue-900 rounded-2xl flex flex-col px-8 justify-center items-center md:items-start order-2 md:order-1 md:rounded-tl-2xl md:rounded-bl-2xl">
                <h1 class="text-4xl mt-8 md:mt-0 border-b-2 md:border-b-0 text-gray-50">About Us</h1>

                <div class="mt-8 mb-8 w-full text-gray-100">
                    <p class="text-xl leading-relaxed">
                        Welcome to our platform! We are a dedicated team passionate about providing valuable content and services. Our mission is to create a community where individuals can learn, connect, and grow.
                    </p>
                    <p class="text-xl leading-relaxed mt-4">
                        At the heart of what we do is a commitment to excellence and a desire to make a positive impact. Whether you're seeking information, inspiration, or looking to engage with like-minded individuals, we strive to be a reliable resource for you.
                    </p>
                </div>

                <div class="flex gap-8 mt-8 mb-8 md:mb-0 items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 cursor-pointer pt-2"
                        viewBox="-44.7006 -60.54775 387.4052 363.2865">
                        <!-- ... (social media icon) ... -->
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 cursor-pointer pt-2"
                        viewBox="-11.493675 -16.3118 99.61185 97.8708">
                        <!-- ... (social media icon) ... -->
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 cursor-pointer pt-2 text-gray-50 fill-current"
                        viewBox="-11.493675 -16.3118 99.61185 97.8708">
                        <!-- ... (social media icon) ... -->
                    </svg>
                </div>
            </div>

            <div class="md:w-1/2 order-1">
                <h2 class="text-4xl font-bold mb-4 tracking-wider text-blue-600">Our Vision</h2>
                <p class="text-gray-800 mb-4">
                    We envision a world where knowledge is accessible to everyone, and individuals can pursue their passions and goals with confidence. Through our platform, we aim to empower and inspire individuals by providing high-quality content and fostering a supportive community.
                </p>

                <h2 class="text-4xl font-bold mb-4 tracking-wider text-blue-600">Our Values</h2>
                <ul class="list-disc list-inside text-gray-800">
                    <li>Excellence: Striving for the highest standards in everything we do.</li>
                    <li>Community: Building a supportive and inclusive community for learning and growth.</li>
                    <li>Integrity: Operating with transparency, honesty, and ethical conduct.</li>
                    <li>Innovation: Embracing creativity and staying at the forefront of knowledge and technology.</li>
                </ul>

                <h2 class="text-4xl font-bold mb-4 tracking-wider text-blue-600">Contact Us</h2>
                <p class="text-gray-800 mb-4">
                    We'd love to hear from you! Feel free to reach out to us with any questions, feedback, or collaboration opportunities. Use the contact form or connect with us on social media.
                </p>

                <form class="w-full">
                    <!-- ... (form fields) ... -->
                </form>
            </div>
        </section>
    </div>

@stop
