<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- <div {{ $attributes->merge(['class' => 'bg-white rounded-3xl font xl:max-w-[70%] lg:max-w-[90%] md:max-w-[80%] max-w-[90%] text-black aspect-[2/1] '])}}>
    <h1 class="text-[#F34551] lg:text-3xl md:text-3xl text-xl font-bold text-center mb-6">Entra nell'area Kidults</h1>
    <h5 class="md:font-semibold self-center text-center lg:leading-6 md:leading-7 leading-5 text-lg md:text-xl mx-auto lg:text-base w-full xl:w-[85%]">Inizia la richiesta inserendo la tua email, se non hai già la  Fidelity Card ti chiederemo qualche dato aggiuntivo.</h5>
    <x-forms.form action="{{ route('login') }}">

        @csrf
        @if ($errors->has('email'))
        {{ $errors->first('email') }}
    @endif
        <div class="flex flex-col lg:gap-20 gap-16">
            <x-forms.input name="email" type="email" placeholder="Email*" class="lg:h-11 px-3 w-full xl:w-[80%] mx-auto h-14 lg:placeholder:text-sm placeholder:text-base" required />
            <x-button.button class="lg:px-5 lg:py-2 py-4 px-9 md:text-2xl lg:text-xl text-center">richiedila subito</x-button.button>
        </div>
    </x-forms.form>
</div> --}}


@if(Auth::check())
    <script>
        setTimeout(function() {
            window.location.href = "{{ url('/cardToysCenter') }}";
        }, 0); 
    </script>
@else
    <div {{ $attributes->merge(['class' => 'bg-white rounded-3xl font xl:max-w-[70%] lg:max-w-[90%] md:max-w-[80%] max-w-[90%] text-black aspect-[2/1] '])}}>
        <h1 class="text-[#F34551] lg:text-3xl md:text-3xl text-xl font-bold text-center mb-6">Entra nell'area Kidults</h1>
        <h5 class="md:font-semibold self-center text-center lg:leading-6 md:leading-7 leading-5 text-lg md:text-xl mx-auto lg:text-base w-full xl:w-[85%]">Inizia la richiesta inserendo la tua email, se non hai già la  Fidelity Card ti chiederemo qualche dato aggiuntivo.</h5>
        <x-forms.form action="{{ route('login') }}">

            @csrf
            <div class="flex flex-col lg:gap-20 gap-16">
                <x-forms.input name="email" type="email" placeholder="Email*" class="lg:h-11 px-3 w-full xl:w-[80%] mx-auto h-14 lg:placeholder:text-sm placeholder:text-base" required />
                <x-button.button class="lg:px-5 lg:py-2 py-4 px-9 md:text-2xl lg:text-xl text-center">richiedila subito</x-button.button>
            </div>
        </x-forms.form>
    </div>
@endif
