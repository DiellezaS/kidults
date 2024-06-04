@vite('resources/css/app.css')
<meta name="viewport" content="width=device-width, initial-scale=1">

<x-layouts.navbar />


<div class="flex flex-col lg:h-full h-fit bg-[#292f36]">
    <div class=" text-white flex flex-col items-center justify-center gap-3 lg:m-20  ">
        <h2 class="text-xl lg:text-4xl font-bold tracking-wide lg:mt-0 mt-16">Benvenuto!</h2>
        <p class="lg:w-[35%] w-full justify-center text-center">Abbiamo appena inviato la tua card anche alla tua email e
            via SMS al tuo numero di cellulare, se lo hai inserito in fase di iscrizione.</p>

        <div class="lg:flex flex-row lg:mt-8 ">
            <div class="flex flex-col items-center font-semibold lg:ml-60 ">
                <p class="text-lg">Ecoo la tua card:</p>
                <img src="/img\newcard.png" class="w-80 h-52 rounded-lg lg:mt-6 mt-2" alt="card">
                <span
                    class="-translate-y-9 text-center font-semibold text-xl text-black tracking-wider">6666691003559</span>


                <div class="w-48 flex  bg-[#ffb3c7] text-black rounded-full p-1  lg:mt-8">
                    <span>
                        <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" class="w-12 ml-4" fill="none">
                            <g id="SVGRepo_bgCarrier" stroke-width="6"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="14"
                                    d="m79.756 48.376-11.86-11.86L22 82.41l27.331 27.331L123.073 36 170 82.927l-73.742 73.742-27.331-27.331">
                                </path>
                                <circle cx="124" cy="82" r="12" fill="#000000"></circle>
                            </g>
                        </svg>
                    </span>
                    <div><span class="text-sm font-bold">Salva con</span>
                        <h4 class="font-bold text-2xl leading-3">Stocard</h4>
                    </div>

                </div>

            </div>


            <div class="mt-8 w-44 h-[400px] lg:flex hidden">
                <svg viewBox="4 1 14 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="Interface / Line_Xl">
                            <path id="Vector" d="M12 21V3" stroke="#ffffff" stroke-width="0.192"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </g>
                </svg>
            </div>


            <div class="flex flex-col  gap-3">
                <p class="font-semibold lg:self-start self-center text-lg lg:m-0 m-8">Cosa puoi fare adesso?</p>


                <div class="flex lg:flex-row flex-col items-center  ">
                    <div class="bg-[#e6e6e9] flex lg:w-32 lg:h-24 w-36 h-28 justify-center  items-center rounded-xl ">
                        <span class="border-4 border-[#1777bf] rounded-full w-14 h-14">
                            <svg fill="#1777bf" viewBox="-10 0 32 32"
                                class="w-13 h-13  rotate-[-24deg] bg-white rounded-full" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="6"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                </g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>euro</title>
                                    <path
                                        d="M11.040 20.96c-0.6 0.24-1.2 0.32-1.84 0.32-2.12 0-3.92-1.24-4.76-3h4.72c0.48 0 0.84-0.4 0.84-0.84s-0.4-0.84-0.84-0.84h-5.24c-0.040-0.2-0.040-0.4-0.040-0.6s0-0.4 0.040-0.6h5.24c0.48 0 0.84-0.4 0.84-0.84s-0.4-0.84-0.84-0.84h-4.76c0.88-1.76 2.68-3 4.76-3 0.6 0 1.24 0.12 1.84 0.32 0.44 0.16 0.92-0.080 1.080-0.52s-0.080-0.92-0.52-1.080c-0.8-0.28-1.6-0.44-2.44-0.44-3.080 0-5.68 1.96-6.6 4.72h-1.68c-0.48 0-0.84 0.4-0.84 0.84s0.4 0.84 0.84 0.84h1.36c0 0.2-0.040 0.4-0.040 0.6s0 0.4 0.040 0.6h-1.36c-0.48 0-0.84 0.4-0.84 0.84s0.4 0.84 0.84 0.84h1.72c0.96 2.72 3.56 4.72 6.6 4.72 0.84 0 1.64-0.16 2.44-0.44 0.44-0.16 0.68-0.64 0.52-1.080s-0.64-0.68-1.080-0.52z">
                                    </path>
                                </g>
                            </svg>
                        </span>
                        <div
                            class="rounded-full w-14 h-14 flex justify-center text-[11px] rotate-[-24deg]  bg-red-500 -translate-x-3 -translate-y-2">
                            <span class="self-center">PUNTO</span>
                        </div>
                    </div>


                    <x-forms.card-text title="1€ DI SPESA = 1 PUNTO!"
                        description="Acquista online o presso i negozi aderenti all'iniziativa Toys Center e Bimbostore."></x-forms.card-text>

                    <x-forms.card-text-sm title="1€ DI SPESA = 1 PUNTO!"
                        description="Acquista online o presso i negozi aderenti all'iniziativa Toys Center e Bimbostore e FAO Schwarz."></x-forms.card-text-sm>

                </div>


                <div class="flex lg:flex-row flex-col items-center">

                  <div class="bg-[#e6e6e9] flex  lg:w-32 lg:h-24 w-36 h-28 justify-center  items-center rounded-xl ">

                        <div class="flex justify-center rotate-[10deg]  ">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 inline-block" viewBox="0 0 107.208 76.321">
                                <g id="Raggruppa_2404" data-name="Raggruppa 2404" transform="translate(-641.753 -891.607)">
                                    <g id="Raggruppa_1989" data-name="Raggruppa 1989" transform="translate(693.08 891.607) rotate(16)">
                                        <path id="Tracciato_3576" data-name="Tracciato 3576" d="M57.135,23.381l-9.392,9.158a9.358,9.358,0,0,0-2.433,6.712c.017.194.038.38.069.562L47.6,52.74c.4,2.342-.994,3.353-3.095,2.252L32.889,48.885a9.23,9.23,0,0,0-7.65,0L13.631,54.992c-2.1,1.1-3.5.091-3.094-2.252l2.217-12.927a8.337,8.337,0,0,0-.311-3.635,8.6,8.6,0,0,0-2.053-3.639L1,23.381c-1.7-1.66-1.171-3.294,1.18-3.639l12.978-1.884a9.238,9.238,0,0,0,6.193-4.5L27.154,1.6c1.05-2.131,2.77-2.131,3.824,0l5.8,11.764a9.232,9.232,0,0,0,6.189,4.5l12.979,1.884C58.307,20.087,58.838,21.721,57.135,23.381Z" transform="translate(0)" fill="#fab600"></path>
                                    </g>
                                    <text id="_300" data-name="300" transform="translate(701.924 928.835) rotate(14)" fill="#fff" font-size="8" font-family="Montserrat-Bold, Montserrat" font-weight="700" letter-spacing="-0.01em">
                                        <tspan x="0" y="0">300</tspan>
                                    </text>
                                    <text id="pt" transform="translate(720.246 931.09) rotate(14)" fill="#fff" font-size="5" font-family="Montserrat-Bold, Montserrat" font-weight="700" letter-spacing="-0.01em">
                                        <tspan x="0" y="0">pt</tspan>
                                    </text>
                                    <g id="Raggruppa_1990" data-name="Raggruppa 1990" transform="translate(307.555 -152.84) rotate(16)">
                                        <path id="Tracciato_3575" data-name="Tracciato 3575" d="M0,0V51.152" transform="translate(629.5 920.5)" fill="none" stroke="#0f73bd" stroke-linecap="round" stroke-width="5"></path>
                                        <line id="Linea_328" data-name="Linea 328" y2="49.62" transform="translate(668.783 921.327)" fill="none" stroke="#0f73bd" stroke-linecap="round" stroke-width="5"></line>
                                        <line id="Linea_329" data-name="Linea 329" x1="38.869" transform="translate(629.5 961.023)" fill="none" stroke="#0f73bd" stroke-linecap="round" stroke-width="5"></line>
                                        <line id="Linea_330" data-name="Linea 330" x1="38.869" transform="translate(629.5 947.396)" fill="none" stroke="#0f73bd" stroke-linecap="round" stroke-width="5"></line>
                                        <line id="Linea_331" data-name="Linea 331" x1="38.869" transform="translate(629.5 933.768)" fill="none" stroke="#0f73bd" stroke-linecap="round" stroke-width="5"></line>
                                    </g>
                                </g>
                            </svg>

                        
                        </div>
                    </div> 

                    <x-forms.card-text title="RAGGIUNGI LE SOGLIE PUNTI"
                        description="Colleziona i punti, raggiungi i livelli crescenti e richiedi sconti immediati!"></x-forms.card-text>


                    <x-forms.card-text-sm title="RAGGIUNGI LE SOGLIE PUNTI"
                        description="Colleziona i punti, raggiungi i livelli crescenti e richiedi sconti immediati!"></x-forms.card-text-sm>

                </div>




                <div class="flex lg:flex-row flex-col items-center">
                    <div class="bg-[#e6e6e9] flex lg:w-32 lg:h-24 w-36 h-28 justify-center items-center rounded-xl">
                        {{-- <svg class="w-14" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                            fill="#E21B1B" transform="rotate(-25)">
                            <g id="SVGRepo_bgCarrier" stroke-width="12"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <polygon style="fill:transparent; stroke:#0f73bd; stroke-width:6;"
                                    points="212.064,430.232 135.352,466.216 130.824,381.968 47.2,372.872 80.416,302.152 14.312,252.728 78.696,213.912 46.68,131.816 132.408,127.224 136.936,41.52 212.112,80.496 259.48,13.472 309.608,78.592 381.872,44.072 389.44,127.016 474.808,134.48 434.456,204.496 499.648,257.112 439.952,310.52 469.48,378.208 386.152,379.72 380.072,464.52 309.232,429.976 263.592,498.216">
                                </polygon>
                                <path style="fill:#0f73bd; stroke:#0f73bd; stroke-width:8;"
                                    d="M259.752,26.944l39.568,51.4l7.896,10.256l11.68-5.576l56.056-26.776l5.912,64.832l1.216,13.32 l13.328,1.168l66.2,5.792l-30.672,53.224l-6.832,11.848l10.64,8.592l52.552,42.408l-48.368,43.272l-8.624,7.712l4.624,10.608 l22.424,51.408l-64.048,1.16l-14.624,0.264l-1.048,14.592l-4.704,65.704l-53.92-26.304l-12.552-6.12l-7.76,11.608l-35.512,53.104 l-40.832-53.88l-7.824-10.32l-11.728,5.504l-60.104,28.192l-3.528-65.608l-0.728-13.576l-13.52-1.472l-65.72-7.144l25.672-54.68 l5.544-11.808l-10.448-7.808l-51.344-38.4l48.432-29.192l11.544-6.96l-4.896-12.56l-25.56-65.52l67.504-3.608l14.368-0.768 l0.76-14.368l3.488-66.136l57.968,30.048l12.384,6.416l8.048-11.392L259.752,26.944 M259.2,0l-49.6,70.184l-80-41.472l-4.8,90.92 l-89.6,4.776l33.6,86.128L0,252.016l70.4,52.632l-35.2,74.968l88,9.568l4.8,89.32l81.6-38.28L264,512l48-71.776l75.2,36.688 l6.4-89.32l88-1.592l-32-73.368L512,256.8l-67.2-54.232L488,127.6l-91.2-7.976l-8-87.728L312,68.584L259.2,0L259.2,0z">
                                </path>
                                <path
                                    d="M344.92,365.512c-12.648,7.064-34.216,14.12-58.008,14.12c-36.448,0-69.896-14.88-90.728-42.392 c-10.056-12.648-17.472-28.624-20.824-48.336h-24.176v-26.416h20.448c0-1.856,0-4.088,0-6.328c0-3.712,0.384-7.416,0.384-11.152 h-20.824v-26.392h24.92c4.824-20.088,13.768-37.184,25.656-50.952c21.208-23.8,50.952-37.92,85.896-37.92 c22.68,0,42.392,5.208,55.776,11.152l-10.416,42.392c-9.648-4.088-24.888-8.944-41.272-8.944c-17.832,0-34.216,5.968-45.72,20.088 c-5.208,5.944-9.296,14.504-11.912,24.176h92.608V245H228.52c-0.352,3.736-0.352,7.824-0.352,11.528c0,2.232,0,3.712,0,5.944h98.552 v26.416h-93.352c2.592,11.152,6.68,19.712,12.264,26.032c11.888,13.384,29.384,18.944,47.976,18.944 c17.096,0,34.568-5.56,42.392-9.648L344.92,365.512z">
                                </path>
                            </g>
                        </svg> --}}



                        <svg class="h-20 inline-block" viewBox="0 0 87.887 87.284">
                            <g id="Raggruppa_2405" data-name="Raggruppa 2405" transform="translate(-1033.47 -892.477)">
                                <g id="brand-icon" transform="matrix(0.951, -0.309, 0.309, 0.951, 1036, 915.382)">
                                    <g id="Raggruppa_971" data-name="Raggruppa 971" transform="translate(0 0)">
                                        <path id="Tracciato_259" data-name="Tracciato 259" d="M31.388.827a1.944,1.944,0,0,1,3.181,0l5.755,8.2a2.538,2.538,0,0,0,2.732.994l9.678-2.581a1.944,1.944,0,0,1,2.437,2.045l-.862,9.98a2.539,2.539,0,0,0,1.454,2.518l9.073,4.244a1.944,1.944,0,0,1,.552,3.133l-7.075,7.091a2.539,2.539,0,0,0-.5,2.863L62.033,48.4a1.944,1.944,0,0,1-1.591,2.755l-9.978.884A2.539,2.539,0,0,0,48.237,53.9l-2.6,9.673a1.943,1.943,0,0,1-2.99,1.088l-8.212-5.736a2.539,2.539,0,0,0-2.907,0l-8.212,5.736a1.943,1.943,0,0,1-2.99-1.088L17.72,53.9a2.539,2.539,0,0,0-2.227-1.869L5.515,51.15A1.944,1.944,0,0,1,3.924,48.4l4.223-9.083a2.539,2.539,0,0,0-.5-2.863L.568,29.358a1.944,1.944,0,0,1,.552-3.133l9.073-4.244a2.539,2.539,0,0,0,1.454-2.518l-.862-9.98a1.944,1.944,0,0,1,2.437-2.045L22.9,10.02a2.538,2.538,0,0,0,2.732-.994Z" fill="none" stroke="#0f73bd" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                                    </g>
                                </g>
                                <text id="_" data-name="€" transform="translate(1071.961 951.594) rotate(-30)" fill="#d0333a" font-size="30" font-family="Montserrat-Bold, Montserrat" font-weight="700">
                                    <tspan x="0" y="0">€</tspan>
                                </text>
                            </g>
                        </svg>
                    </div>

                    <x-forms.card-text title="RICHIEDI I PREMI SCONTO"
                        description="Richiedi i premi sconto raggiunti in cassa o online."></x-forms.card-text>

                    <x-forms.card-text-sm title="RICHIEDI I PREMI SCONTO"
                        description="Richiedi i premi sconto raggiunti in cassa o online."></x-forms.card-text-sm>

                </div>




                <div class="flex lg:flex-row flex-col items-center ">
                    <div class="bg-[#e6e6e9] flex  lg:w-32 lg:h-24 w-36 h-28 justify-center  items-center rounded-xl ">
                        <svg fill="#0f73bd" width="50px" height="50px" viewBox="0 0 512 512" id="_x30_1"
                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                stroke="#CCCCCC" stroke-width="3.072"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M256,90 c37.02,0,67.031,35.468,67.031,79.219S293.02,248.438,256,248.438s-67.031-35.468-67.031-79.219S218.98,90,256,90z M369.46,402 H142.54c-11.378,0-20.602-9.224-20.602-20.602C121.938,328.159,181.959,285,256,285s134.062,43.159,134.062,96.398 C390.062,392.776,380.839,402,369.46,402z">
                                </path>
                            </g>
                        </svg>
                    </div>


                    <x-forms.card-text title="ACCEDI ALLA TUA AREA RISERVATA"
                        description="Vedi tutte le informazioni sul tuo profilo loyalty"></x-forms.card-text>


                    <x-forms.card-text-sm title="ACCEDI ALLA TUA AREA RISERVATA"
                        description="Vedi tutte le informazioni sul tuo profilo loyalty"></x-forms.card-text-sm>

                </div>



            </div>

        </div>
        <div class="m-12">
            <x-button.button class="px-8 py-2 text-3xl font-bold">ACCEDI</x-button.button>

        </div>
    </div>
</div>
