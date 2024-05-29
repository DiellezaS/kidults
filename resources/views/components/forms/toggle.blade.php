



@props([
'type' => 'text'
])
<input type="{{ $type }}"  {{ $attributes->merge(['class' => 'toggle-btn bg-gray-200 placeholder:text-black placeholder:pl-5 placeholder:text-sm placeholder:font-semibold  rounded-lg text-white shadow-xl']) }} />