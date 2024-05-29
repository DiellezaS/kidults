<figure class="relative ">
    <img class=" w-[100vw] h-[60vh] brightness-50 saturate-50 mx-auto" src="img/background-img.jpg" alt="image description">
    <div {{ $attributes->merge(['class' => '']) }}
>
        @yield('content')
    </div>
</figure>