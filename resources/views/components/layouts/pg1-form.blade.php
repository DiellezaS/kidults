

<div class="bg-white rounded-3xl font  text-black  px-20 py-12 justify-self-start self-center aspect-[2/1] ">
    <h1 class="text-[#F34551] text-3xl  font-bold text-center  mb-6">Entra nell'area Kidults</h1>
    <h5 class=" font-semibold text-center  self-center leading-6 text-xl lg:text-base">Inizia la richiesta inserendo la tua email, se non hai già la <br> Fidelity Card ti chiederemo qualche dato aggiuntivo.</h5>
    <x-forms.form action="/">
      <div class="flex flex-col lg:gap-20 gap-16 ">
        <x-forms.input name="email" type="email" placeholder="Email*" class="lg:h-11 w-full h-10 " required />
        <x-button.button class="px-5 py-2 text-xl">richiedila subito</x-button.button>
      </div>
    </x-forms.form>
  </div>