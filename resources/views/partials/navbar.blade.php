<header class="md:flex items-center justify-between     py-3 md:py-4 bg-gray-900  relative   text-gray-50 ">
    <div class="flex justify-between min-w-min px-4">
        <div class="flex text-3xl font-normal relative  items-center">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-10 w-10"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"
                />
                </svg>
                <a href="/">
                Blog
                </a>
        </div>
       <svg xmlns="http://www.w3.org/2000/svg" id="menu-toggler" class="block cursor-pointer md:hidden self-center h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16M4 12h8m-8 6h16" />
         </svg>
    </div>
    <nav class=" md:mt-0 transition delay-300 ease-out md:px-4">             
       <div id="menu" class=" bg-gray-800 w-full py-4 md:py-0 md:mt-0 z-40 absolute   md:relative  md:bg-gray-900 mt-3 pl-4   flex flex-col hidden md:flex   md:flex-row m-0 p-0  text-lg md:items-center gap-8">
            <ul class="bg-gray-800  py-4 md:py-0 md:mt-0 z-40 absolute md:relative md:bg-gray-900 mt-3 pl-4 flex flex-col hidden md:flex md:flex-row m-0 p-0 text-lg md:items-center gap-8">   
                <li><a href="/posts" class="hover:text-blue-400 ">Blog</a></li>
                <li><a href="/about"  class="hover:text-blue-400 ">About Us</a></li>
                <li><a href="/contact" class="hover:text-blue-400">Contact Us</a></li>
                {{-- <li><a href="/privacy-policy" class="hover:text-blue-400 ">Privacy policy</a></li> --}}
            </ul>
            @if (Route::has('login'))
                {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-blue-400">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-blue-400">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hover:text-blue-400">Register</a>
                        @endif
                    @endauth
                {{-- </div> --}}
                @endif
           
        </div>
         
     </nav>
    
</header>
