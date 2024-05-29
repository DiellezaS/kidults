<div class="flex md:flex-row flex-col border text-left px-5 py-3 rounded-xl gap-2 w-[87%]">
    <x-forms.toggle/>
    <div class="ml-2 pr-9">
    <h1 {{ $attributes->merge(['class' =>$titleClass ?? 'text-[#083C92] lg:text-lg font-bold tracking-tight md:pb-3 md:pt-1 ']) }}>{!!$title!!}</h1>
    <p {{ $attributes->merge(['class' => 'text-[#CFCFCF] font-medium text-sm']) }}>{{ $description}}</p>
</div>
</div>