@props([
'type' => 'text', 'name', 'placeholder'
])


<input type={{ $type }} name={{ $name }} placeholder={{ $placeholder }} 

{{ $attributes->merge(['class' => 'bg-gray-200 placeholder:text-black placeholder:pl-5 placeholder:text-sm placeholder:font-semibold  rounded-lg text-white shadow-xl']) }} />