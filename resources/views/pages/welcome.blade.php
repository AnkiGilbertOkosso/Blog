
@extends('layout')

@section('content')
    

      <section class="bg-gray-900">
          <div class="flex h-96 flex-col md:flex-row       p-4 gap:4 justify-center  ">
              <div class="flex flex-col justify-center my-8  items-center">
                <h1 class="text-4xl self-start md:text-6xl text-gray-200 font-semibold ">Tailwind CSS blog template</h1>
                <p class="my-4 text-xl md:text-lg self-start md:self-center text-left text-gray-400">
                    Download our free blog template made with tailwind css.
                </p>
                <div class="flex flex-col sm:flex-row justify-center  gap-2 my-4 w-full">
                    <button class=" text-lg flex gap-2 items-center justify-center w-full  md:w-48 h-12 hover:bg-blue-700 bg-blue-600 rounded-full  text-gray-50 focus:outline-none" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                        Our Blog
                    </button>
                    <button class="flex gap-2 text-lg items-center justify-center w-full md:w-48 h-12  hover:bg-blue-700 bg-blue-600 rounded-full text-gray-50 focus:outline-none" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                          </svg>
                        Download Now
                    </button>
                </div>
              </div>
          </div>
      </section>
      
      <div class="container mx-auto">

         <section id="newsletter" class="grid grid-cols-2 gap-2  my-8 p-2">
            <p class="text-4xl col-span-2 md:text-left border-l-4 border-blue-800 pl-2 text-blue-800">Join Our Newsletter</p>

            <div class="flex flex-col col-span-2 md:col-span-1 justify-center items-center   ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 md:h-60 md:w-60 text-blue-700 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <p class="text-xl text-center text-blue-800">
                    Join Our newsletter and get upcoming posts directly in your mail
    
    
                </p>
            </div>
            <form class="flex flex-col justify-center col-span-2 md:col-span-1 md:mt-0 mt-4">
                <div>
                    <!-- <label class="text-md font-semibold text-gray-800 ">Your Email</label> -->
                    <input type="email" placeholder="your email" class="mt-4 p-4 mb-8 border focus:outline-white w-full text-gray-800"/>

                </div>
                <input type="text" placeholder="your name" class="p-4  border focus:outline-white w-full text-gray-800"/>
                <button class="w-full p-4 bg-blue-700 mt-8 text-xl uppercase text-gray-50 hover:bg-blue-800 focus:outline-none" type="submit">Subscribe</button>
            </form>
        </section>

         
         
        <section id="featured-posts" class="grid  sm:grid-cols-2 gap-4 p-2">
            <h2 class="col-span-full text-3xl md:text-4xl mb-8 border-l-4   border-blue-800 pl-2   my-4 text-blue-800 ">Featured posts</h2>
            @foreach ($posts as $post)
                
            
                <div class="grid lg:grid-cols-2 border rounded-lg gap-4 h-auto p-4">
                    <div class="max-w-2xl  h-auto  flex items-center relative ">
                        <img src="{{ asset('upload/' . $post->image)}} " width="640" height="360" class="w-full h-auto" alt="placeholder img"/>
                        <div class="bg-blue-400  w-24 pt-1  h-8 text-gray-50 font-semibold text-center absolute top-0">
                            Javascript
                        </div>
                    </div>
                    <div class="">
                        <a href="{{ route('posts.show', $post->id )}}">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 cursor-pointer ">{{ $post->title }}</h3>
                        </a>
                        <div class="flex gap-2 mb-2">
                            <div class="w-10 h-10 rounded-full bg-gray-300"></div>
                            <div class="text-sm text-gray-600">
                                <h4>By Sarthak Kaushik</h4>
                                <h4>Updated over 2 weeks ago</h4>
                            </div>
                        </div>
                        <p class="text-gray-700"> {!! substr($post->body, 0, 100) !!}{{ strlen($post->body) > 100 ? "..." : "" }} </p>
                        <a href="{{ route('posts.show', $post->id )}}">
                            <button class="py-2 border px-4 w-full bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">Read More</button>
                        </a>
                    </div>
                </div>
            @endforeach
         </section>
      </div>
        
    </div>  

@endsection