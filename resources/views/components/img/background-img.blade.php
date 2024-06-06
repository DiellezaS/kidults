


<figure class="relative">
    <img class=" w-full lg:h-[60vh] h-2/3 brightness-50 saturate-50 mx-auto" src="img/background-img.jpg" alt="image description">
    <div id="dynamicHeightDiv"  class="lg:hidden flex-grow bg-[#292F36]"></div>
    <div id="imgdiv"  class="grid lg:grid-cols-2 grid-cols-1  absolute inset-5 lg:inset-0 xl:gap-0 md:gap-16 lg:gap-12 gap-8  place-items-center ">
        @yield('font')
        @yield('form')
    </div>
    <div >
        @yield('content')
    </div>
</figure>