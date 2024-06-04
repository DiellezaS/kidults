

<figure class="relative ">
    <img class="w-full h-fit lg:h-[60vh] brightness-50 saturate-50 mx-auto" src="img/background-img.jpg" alt="image description">
    <div class="lg:grid lg:grid-cols-2 absolute inset-5 lg:inset-0  lg:gap-1 place-items-center ">
        @yield('font')
        @yield('form')
    </div>
    <div>
              @yield('content')
    </div>
</figure>