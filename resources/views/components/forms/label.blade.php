@props(['for'])
<label for="{{ $for }}" {{ $attributes->merge(['class' => 'absolute text-sm text-gray-500 duration-300 transform md:-translate-y-4 -translate-y-3 scale-75 md:top-6 top-4 pl-5 z-10 origin-[0] start-2.5  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto']) }}>
{{ $slot }}
</label>