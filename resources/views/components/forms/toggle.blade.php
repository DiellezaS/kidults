



@props([
'type' => 'text', 'name', 'id'
])
<input type={{ $type }} name={{ $name }} id="{{$id}}" {{ $attributes->merge(['class' => 'toggle-btn bg-gray-200 placeholder:text-black placeholder:pl-5 placeholder:text-sm placeholder:font-semibold  rounded-lg text-white shadow-xl']) }} />