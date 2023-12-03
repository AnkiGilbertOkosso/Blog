@extends('layout')

@section('content')
      <div class="container mx-auto px-2">
        <section class="grid md:grid-cols-3 mt-12">
         
            <main class="col-span-2 relative md:mr-2">
             <h1 class="text-3xl font-bold text-gray-800"> {{ $post->title }} </h1>
             <div class="flex mt-2 my-2 items-center gap-4">
                 <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                 <div class="text-gray-500">
                     By <span class="text-gray-800 cursor-pointer">Sarthak Kaushik</span> on 14th April 2020
                 </div>
             </div>

             <div class="flex justify-center border">
                 <img src="{{ asset('upload/' . $post->image )}}" class="cursor-pointer" alt="placeholder tag"/>
             </div>
             <blockquote class="italic font-semibold font-serif text-gray-800 border-l-4 border-gray-900 my-3 pl-2 ml-8">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo at expedita nam assumenda totam voluptas quibusdam repudiandae. Culpa mollitia dolor illo dolorum ipsum expedita ea nemo quasi soluta hic.
                 
             </blockquote>
             <article>
                 <section>
                    {!! $post->body !!}
                 </section>
             </article>
             <form id="comment">
                 <textarea placeholder="your comment" cols="5" rows="6" class="outline-none focus:outline-none text-xl bg-gray-100 rounded p-4 text-gray-800 font-semibold w-full"></textarea>
                 <input type="email" class="w-full bg-gray-100 p-2 my-2 px-4 text-xl text-gray-800 rounded focus:outline-none" placeholder="your email" required="true " />
                 <input type="text" class="w-full bg-gray-100 p-2 px-4 text-xl text-gray-800 rounded focus:outline-none" placeholder="your name" required="true " />
                 <button class="my-2 py-2 text-xl text-center w-full bg-blue-700 text-gray-50 hover:bg-blue-600 focus:outline-none rounded" type="submit">Comment</button>
             </form>
            </main>
            
            <aside class="col-span-2 md:col-span-1 mt-4 md:mt-0">
                <div class="mb-8 ">
                    <p class="text-3xl font-semibold border-l-4 border-gray-800 pl-2 my-8 text-gray-700">Explore Categories</p>
                    <ul class="ml-3 text-lg font-semibold text-gray-700">
                    @foreach($categories as $category)
                        <li class="border py-2 px-2 mt-2 mb-1 cursor-pointer hover:text-gray-900 rounded-sm flex justify-between"> {{ $category->name }} <span class="text-gray-900"> {{ $category->posts_count }} </span></li>
                    @endforeach
                    
                    </ul>
                </div>
                <div id="author-card" class="flex flex-col items-center my-8">
                    <p class="text-3xl font-semibold border-l-4 my-8 border-gray-800 pl-2 text-gray-700 self-start">About Author</p>

                    <div >
                        <div class="w-48 h-48 bg-gray-900 bg-author-img bg-contain bg-no-repeat bg-center rounded-full"></div>
                    </div>
                    <div>
                        <p id="author-name" class="text-2xl text-center font-medium my-4 text-gray-800">Sarthak Kaushik</p>
                        <p class="my-1 text-gray-600 text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non libero nam sit! Maxime omnis expedita sequi sapiente consequatur praesentium quae voluptates explicabo deleniti asperiores. Nemo id soluta fuga tenetur ex?
                        </p>
                        <div class="flex justify-center gap-8">
                            <div class="w-16 h-16 cursor-pointer flex justify-center   rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="-204.79995 -341.33325 1774.9329 2047.9995"><path d="M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373" fill="#1877f2"/><path d="M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4" fill="#fff"/></svg>
                            </div>
                            <div class="w-16 h-16 flex justify-center  cursor-pointer  rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="-36.45 -60.8 315.9 364.8"><circle r="121.5" cy="121.5" cx="121.5" fill="#fff"/><path d="M121.5 0C54.4 0 0 54.4 0 121.5 0 173 32 217 77.2 234.7c-1.1-9.6-2-24.4.4-34.9 2.2-9.5 14.2-60.4 14.2-60.4s-3.6-7.3-3.6-18c0-16.9 9.8-29.5 22-29.5 10.4 0 15.4 7.8 15.4 17.1 0 10.4-6.6 26-10.1 40.5-2.9 12.1 6.1 22 18 22 21.6 0 38.2-22.8 38.2-55.6 0-29.1-20.9-49.4-50.8-49.4-34.6 0-54.9 25.9-54.9 52.7 0 10.4 4 21.6 9 27.7 1 1.2 1.1 2.3.8 3.5-.9 3.8-3 12.1-3.4 13.8-.5 2.2-1.8 2.7-4.1 1.6-15.2-7.1-24.7-29.2-24.7-47.1 0-38.3 27.8-73.5 80.3-73.5 42.1 0 74.9 30 74.9 70.2 0 41.9-26.4 75.6-63 75.6-12.3 0-23.9-6.4-27.8-14 0 0-6.1 23.2-7.6 28.9-2.7 10.6-10.1 23.8-15.1 31.9 11.4 3.5 23.4 5.4 36 5.4 67.1 0 121.5-54.4 121.5-121.5C243 54.4 188.6 0 121.5 0z" fill="#e60023"/></svg>
                            </div>
                            <div class="w-16 h-16 flex justify-center  cursor-pointer  rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="-44.7006 -60.54775 387.4052 363.2865"><path fill="#1da1f2" d="M93.719 242.19c112.46 0 173.96-93.168 173.96-173.96 0-2.646-.054-5.28-.173-7.903a124.338 124.338 0 0030.498-31.66c-10.955 4.87-22.744 8.148-35.11 9.626 12.622-7.57 22.313-19.543 26.885-33.817a122.62 122.62 0 01-38.824 14.841C239.798 7.433 223.915 0 206.326 0c-33.764 0-61.144 27.381-61.144 61.132 0 4.798.537 9.465 1.586 13.941-50.815-2.557-95.874-26.886-126.03-63.88a60.977 60.977 0 00-8.279 30.73c0 21.212 10.794 39.938 27.208 50.893a60.685 60.685 0 01-27.69-7.647c-.009.257-.009.507-.009.781 0 29.61 21.075 54.332 49.051 59.934a61.218 61.218 0 01-16.122 2.152 60.84 60.84 0 01-11.491-1.103c7.784 24.293 30.355 41.971 57.115 42.465-20.926 16.402-47.287 26.171-75.937 26.171-4.929 0-9.798-.28-14.584-.846 27.059 17.344 59.189 27.464 93.722 27.464"/></svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="related-posts" class="grid gap-2">
                    <p class="text-3xl font-semibold border-l-4 my-8 border-gray-800 pl-2 text-gray-700">Related Posts</p>
                    <div class="grid grid-cols-2   border rounded-lg">
                        <div class=" md:col-span-2 lg:col-span-1">
                            <img src="{{ asset('images/aaa.png')}}" class="w-full h-auto" >
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1 px-2 flex flex-col justify-center">
                            <p class="text-xl cursor-pointer">
                                <a href="single.html">
                                    While Loop in Javascript
                                </a>
                                </p>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. m, sapiente explicabo!</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2   border rounded-lg">
                        <div class=" md:col-span-2 lg:col-span-1">
                            <img src="{{ asset('images/aaa.png')}}" class="w-full h-auto" >
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1 px-2 flex flex-col justify-center">
                            <p class="text-xl cursor-pointer">
                                <a href="single.html">
                                    Foreach Loop in Javascript
                                </a>
                            </p>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. m, sapiente explicabo!</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2   border rounded-lg">
                        <div class=" md:col-span-2 lg:col-span-1">
                            <img src="{{ asset('images/aaa.png')}}" class="w-full h-auto" >
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1 px-2 flex flex-col justify-center">
                            <p class="text-xl cursor-pointer">
                                <a href="single.html">
                                    Map Loop in Javascript
                                </a>
                                </p>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. m, sapiente explicabo!</p>
                        </div>
                    </div>
                   
                    <a href="{{ route('posts.edit', $post->id )}}">
                        <button class="py-2 border px-4 w-full bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">Edit post</button>
                    </a>
                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-2 border px-4 w-full bg-black-100 text-white-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-gray-600 hover:text-white-100">
                            Delete Post
                        </button>
                    </form>

                </div>
                
            </aside>  
          </section>
      </div>
     
@stop