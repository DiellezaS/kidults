@vite('resources/css/app.css')
<meta name="viewport" content="width=device-width, initial-scale=1">


<div class="absolute font  xl:inset-8 md:inset-0 inset-0 self-center ">
   
    {{-- @foreach($interessi as $interesse)
    <input type="checkbox" name="interessi[]" value="{{ $interesse->id }}" {{ isset($user) && $user->choices->contains($interesse->id) ? 'checked' : '' }}>
    <label>{{ $interesse->name }}</label>
@endforeach --}}

    
    <div id="img-div" class=" xl:p-2  m-3 flex lg:flex-row flex-col  relative mx-auto 2xl:max-w-[73%] xl:max-w-[98%] lg:max-w-[90%] md:max-w-[80%] max-w-[90%]  ">
        <div class="flex flex-col items-center bg-white rounded-3xl rounded-b-none lg:rounded-b-3xl lg:rounded-br-none lg:rounded-e-none lg:pt-0 lg:px-8 2xl:p-8 xl:p-4  md:pt-4 px-3 md:p-14 space-y-2">
            <h2 class="text-[#F34551] pt-7 tracking-tight  md:text-3xl text-lg font-[750]">Possiedi già una Card Toys Center</h2>
            <h5 class="text-[#F34551] text-base tracking-tight font-medium md:text-xl">Prima di procedere...</h5>
            <p class="md:w-[68%] w-[78%] text-center tracking-wide md:tracking-normal leading-5 text-sm md:text-sm font-semibold">Seleziona qui sotto le aree di tuo interesse per ricevere offerte in linea con le tue preferenze.</p>
            <x-layouts.check-toggles class=" xl:w-[95%] lg:w-[120%]" :interessi="$interessi"/>
            <div class="flex flex-col space-y-3 ">
                <div class="self-center mt-4"> <x-button.button class="py-2 px-8 text-2xl">CONFERMA</x-button.button>
                </div>
                <a href="#" class="self-center lg:mb-0 mb-2 text-black text-sm  font-medium  underline">Annulla</a>
                <p class="self-center  lg:mb-0 mb-2 text-center  text-base lg:text-sm font-medium">Riceverai una mail di conferma all'indirizzo test@example.it</p>
            </div>
        </div>
        <div class="flex flex-col rounded-3xl lg:rounded-s-none lg:rounded-tr-3xl rounded-t-none  bg-[#E6E6E9] justify-center w-full">
            <h4 class="self-center mt-10 text-lg font-bold">Cosa cambia?</h4>
            <div class="leading-5 space-y-2 md:w-[75%] w-[90%] font-medium text-black md:mx-10 md:tracking-tighter">
                <span class="flex px-1"><svg viewBox="1 3 14 28" fill="none" class="svg-dots" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <circle cx="12" cy="12" r="2" fill="#F34551"></circle>
                        </g>
                    </svg>
                    Puoi continuare ad accumulare e usare i tuoi punti, come sempre.</span>
                <span class="flex px-1"><svg viewBox="1 3 16 28" fill="none" class="svg-dots" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <circle cx="12" cy="12" r="2" fill="#F34551"></circle>
                        </g>
                    </svg>
                    Non riceverai più offerte e promozioni dedicate alla prima infanzia.</span>
                <span class="flex "><svg viewBox="0 3 16 28" fill="none" class="svg-dots " xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <circle cx="12" cy="12" r="2" fill="#F34551"></circle>
                        </g>
                    </svg>
                    Riceverai solo le offerte esclusive dedicate ai giochi 18+.</span>
            </div>
        </div>
    </div>
</div>
<div id="dynamicHeight" class="lg:hidden flex bg-[#292F36]"></div>



<script>
    const dynamicHeight = document.getElementById('dynamicHeight');
    const element = document.getElementById('img-div');
    function updateDiv() {
        const totalContentHeight = element.scrollHeight - 590;
        dynamicHeight.style.height = `${totalContentHeight}px`;
        console.log(dynamicHeight)
    }
    updateDiv();
    window.addEventListener('resize', updateDiv);
</script>
