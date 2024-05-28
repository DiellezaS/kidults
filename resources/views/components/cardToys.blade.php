
@vite('resources/css/app.css')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">


<div class="bg-gray-600  h-full">
<div class=" md:p-2 max-w-md  m-3 md:flex flex-row md:max-w-6xl relative mx-auto ">


<div class="flex flex-col items-center bg-white rounded-3xl rounded-b-none md:rounded-b-3xl md:rounded-br-none md:rounded-e-none  pt-8 md:pt-4 md:p-4 space-y-2">
<h2 class="text-[#f34551]  md:text-3xl text-[23px] font-bold">Possiedi già una Card Toys Center</h2>
<h5 class="text-[#f34551] text-lg md:text-xl">Prima di procedere...</h5>
<p class="md:w-[68%] w-[78%] text-center tracking-wide md:tracking-normal leading-5 text-base md:text-sm font-medium">Seleziona qui sotto le aree di tuo interesse per ricevere offerte in linea con le tue preferenze.</p>

<div class="text-center md:space-y-3 space-y-5 leading-4 font-medium w-full md:w-[90%]">
  
<x-forms.toggle class="toggle-btn" name="Costruzioni" type="checkbox" id="id1"></x-forms.toggle>
<x-forms.toggle-label name="Costruzioni" for="id1"></x-forms.toggle-label>

<x-forms.toggle class="toggle-btn" name="Giochi in scatola" type="checkbox" id="id2"></x-forms.toggle>
<x-forms.toggle-label name="Giochi in scatola" for="id2"></x-forms.toggle-label>

 
<x-forms.toggle class="toggle-btn" name="Puzzle" type="checkbox" id="id3"></x-forms.toggle>
<x-forms.toggle-label name="Puzzle" for="id3"></x-forms.toggle-label>


<x-forms.toggle class="toggle-btn" name="Collezionabili" type="checkbox" id="id4"></x-forms.toggle>
<x-forms.toggle-label name="Collezionabili" for="id4"></x-forms.toggle-label>


<x-forms.toggle class="toggle-btn" name="Action figures" type="checkbox" id="id5"></x-forms.toggle>
<x-forms.toggle-label name="Action figures" for="id5"></x-forms.toggle-label>


<x-forms.toggle class="toggle-btn" name="Gadget e idee regalo" type="checkbox" id="id6"></x-forms.toggle>
<x-forms.toggle-label name="Gadget e idee regalo" for="id6"></x-forms.toggle-label>


<x-forms.toggle class="toggle-btn" name="Giochi in scatola" type="checkbox" id="id7"></x-forms.toggle>
<x-forms.toggle-label name="Giochi in scatola" for="id7"></x-forms.toggle-label>


<x-forms.toggle class="toggle-btn" name="Bambole da collezione" type="checkbox" id="id8"></x-forms.toggle>
<x-forms.toggle-label name="Bambole da collezione" for="id8"></x-forms.toggle-label>
    
</div>
<div class="flex flex-col space-y-3 ">
    <x-button.button >CONFERMA</x-button.button>
   
<a href="#" class="self-center md:mb-0 mb-3 text-black text-sm font-medium">Annulla</a>
<p class="self-center md:w-full md:mb-0 mb-4 text-center w-[75%] text-base md:text-sm font-medium">Riceverai una mail di conferma all'indirizzo test@example.it</p>

</div>
</div>



<div class="flex flex-col rounded-3xl md:rounded-s-none md:rounded-tr-3xl rounded-t-none  bg-[#e6e6e9] justify-center w-full md:w-[80%]">
    <h4 class="self-center mt-10 text-lg font-bold">Cosa cambia?</h4>
    <div class="leading-5 space-y-2 w-[75%] font-medium md:mx-10 tracking-tighter">
        <span class="flex px-1"><svg viewBox="1 3 14 28" fill="none" class="svg-dots" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="2" fill="#f34551"></circle> </g></svg>
        
            Puoi continuare ad accumulare e usare i tuoi punti, come sempre.</span>


            <span class="flex px-1"><svg viewBox="1 3 16 28" fill="none" class="svg-dots" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="2" fill="#f34551"></circle> </g></svg>
        
            Non riceverai più offerte e promozioni dedicate alla prima infanzia.</span>

                <span class="flex "><svg viewBox="0 3 16 28" fill="none" class="svg-dots " xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="2" fill="#f34551"></circle> </g></svg>
        
            Riceverai solo le offerte esclusive dedicate ai giochi 18+.</span>
    
        </div>
       
</div>
</div>

   
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const toggleLabels = document.querySelectorAll('.toggle-label');
    
      toggleLabels.forEach(function(toggleLabel) {
        const toggleBtn = toggleLabel.previousElementSibling;
    
        toggleLabel.addEventListener('click', function() {
          if (toggleBtn.checked) {
            toggleLabel.classList.remove('selected');
            toggleBtn.checked = true; 
          } else {
            toggleLabel.classList.add('selected');
            toggleBtn.checked = false; 
          }
        });
      });
    });
</script>
