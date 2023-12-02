@extends('layout')

@section('content')

    

     <div class="container mx-auto">
         <div class="blog-wrapper wrapper-col-1  sm:wrapper-col-2 lg:wrapper-col-3 p-2">

            @foreach ($posts as $post)
                <div class="blog-post w-full overflow-none border rounded-md">
                    <div class="max-w-2xl  h-auto  flex items-center relative ">
                        <img src="{{ asset('upload/' . $post->image)}}" class="w-full h-auto" alt="placeholder img"/>
                        <div class="bg-blue-400  w-24 pt-1 cursor-pointer  h-8 text-gray-50 font-semibold text-center absolute top-0">
                            Javascript
                        </div>
                    </div>                
                    <div class="p-4">
                        <div class="flex gap-2 mb-2">
                            <div class="w-10 h-10 rounded-full bg-gray-400 animate-pulse"></div>
                            <div class="text-sm text-gray-500">
                                <p>By <span class="text-gray-700 cursor-pointer">Sarthak Kaushik</span> </p>
                                <h4>Updated over 2 weeks ago</h4>
                            </div>
                        </div>
                        <h4 class=" text-3xl font-bold text-gray-700 cursor-pointer hover:text-gray-800">
                            <a href="{{ route('posts.show', $post->id )}}">
                                {{ $post->title }}
                            </a>
                        </h4>
                        <p class="text-md my-4 text-gray-500  font-sans"> {!! substr($post->body, 0, 100) !!}{{ strlen($post->body) > 100 ? "..." : "" }} </p>
                        <a href="{{ route('posts.show', $post->id )}}" class="text-blue-500 mb-4">Read More →</a>
                    </div>                
                </div>
            @endforeach
         </div>
         <div id="pagination" class="mb-8 mx-auto">
             <div class="flex w-full justify-center gap-2">
                 <div class="w-12 h-12 text-lg text-gray-200 hover:text-gray-200 text-center font-bold flex items-center justify-center bg-blue-500 rounded-full hover:bg-blue-500  cursor-pointer">1</div>
                 <div class="w-12 h-12 text-lg text-gray-700  hover:text-gray-200 text-center font-bold flex items-center justify-center bg-blue-300 rounded-full hover:bg-blue-500  cursor-pointer">2</div>
                 <div class="w-12 h-12 text-lg text-gray-700 hover:text-gray-200 text-center font-bold flex items-center justify-center bg-blue-300 rounded-full hover:bg-blue-500  cursor-pointer">3</div>
                 <div class="w-12 h-12 text-lg text-gray-700 hover:text-gray-200 text-center font-bold flex items-center justify-center bg-blue-300 rounded-full hover:bg-blue-500  cursor-pointer">4</div>
             </div>
         </div>
     </div>
@stop