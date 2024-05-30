@vite('resources/css/app.css')


<x-layouts.navbar />


<div class="md:flex flex-col lg:h-full h-fit bg-[#292f36]">
    <div class=" text-white flex flex-col items-center justify-center gap-3 md:m-20  ">
        <h2 class="text-xl md:text-4xl font-bold tracking-wide md:mt-0 mt-16">Benvenuto!</h2>
        <p class="lg:w-[35%] w-full justify-center text-center">Abbiamo appena inviato la tua card anche alla tua email e
            via SMS al tuo numero di cellulare, se lo hai inserito in fase di iscrizione.</p>

        <div class="md:flex flex-row md:mt-8 ">
            <div class="flex flex-col items-center font-semibold lg:ml-60 ">
                <p class="text-lg">Ecoo la tua card:</p>
                <img src="/img\newcard.png" class="w-80 h-52 rounded-lg md:mt-6 mt-2" alt="card">
                <span
                    class="-translate-y-9 text-center font-semibold text-xl text-black tracking-wider">6666691003559</span>


                <div class="w-48 flex  bg-[#ffb3c7] text-black rounded-full p-1  md:mt-8">
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


            <div class="mt-8 w-44 h-[400px] md:flex hidden">
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


            <div class="flex flex-col  md:gap-3">
                <p class="font-semibold lg:self-start self-center text-lg lg:m-0 m-8">Cosa puoi fare adesso?</p>


                <div class="flex md:flex-row flex-col items-center  ">
                    <div class="bg-[#e6e6e9] flex md:w-32 md:h-24 w-36 h-28 justify-center  items-center rounded-xl ">
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


                <div class="flex md:flex-row flex-col items-center">
                    <div class="bg-[#e6e6e9] flex  md:w-32 md:h-24 w-36 h-28 justify-center  items-center rounded-xl ">

                        <div class="flex justify-center text-[9px] rotate-[22deg] translate-x-16  ">

                            <svg class="w-20 h-16" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                        stroke="#fab600" stroke-width="1.176" stroke-linecap="round"
                                        stroke-linejoin="round" fill="#fab600"></path>
                                </g>
                            </svg>
                            <span class="text-white -translate-x-12 translate-y-7">300pt</span>
                        </div>

                        <div class="-translate-x-[70px]">
                            <svg class="w-20 h-12 rotate-[24deg]" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path style="fill:#0f73bd;"
                                            d="M100.512,100.512L100.512,100.512c0-12.575,10.193-22.768,22.768-22.768h265.44 c12.575,0,22.768,10.193,22.768,22.768l0,0c0,12.575-10.193,22.768-22.768,22.768H123.28 C110.705,123.28,100.512,113.086,100.512,100.512z">
                                        </path>
                                        <path style="fill:#0f73bd;"
                                            d="M100.512,256.555L100.512,256.555c0-12.575,10.193-22.768,22.768-22.768h265.44 c12.575,0,22.768,10.193,22.768,22.768l0,0c0,12.575-10.193,22.768-22.768,22.768H123.28 C110.705,279.323,100.512,269.13,100.512,256.555z">
                                        </path>
                                        <path style="fill:#0f73bd;"
                                            d="M100.512,410.933L100.512,410.933c0-12.575,10.193-22.768,22.768-22.768h265.44 c12.575,0,22.768,10.193,22.768,22.768l0,0c0,12.575-10.193,22.768-22.768,22.768H123.28 C110.705,433.701,100.512,423.507,100.512,410.933z">
                                        </path>
                                    </g>
                                    <g>
                                        <path style="fill:#0f73bd;"
                                            d="M157.153,100.512L157.153,100.512c0-12.575,10.193-22.768,22.768-22.768H123.28 c-12.575,0-22.768,10.193-22.768,22.768l0,0c0,12.575,10.193,22.768,22.768,22.768h56.641 C167.346,123.28,157.153,113.086,157.153,100.512z">
                                        </path>
                                        <path style="fill:#0f73bd;"
                                            d="M157.153,256.555L157.153,256.555c0-12.575,10.193-22.768,22.768-22.768H123.28 c-12.575,0-22.768,10.193-22.768,22.768l0,0c0,12.575,10.193,22.768,22.768,22.768h56.641 C167.346,279.323,157.153,269.13,157.153,256.555z">
                                        </path>
                                        <path style="fill:#0f73bd;"
                                            d="M157.153,410.933L157.153,410.933c0-12.575,10.193-22.768,22.768-22.768H123.28 c-12.575,0-22.768,10.193-22.768,22.768l0,0c0,12.575,10.193,22.768,22.768,22.768h56.641 C167.346,433.701,157.153,423.507,157.153,410.933z">
                                        </path>
                                    </g>
                                    <g>
                                        <path style="fill:#0f73bd;"
                                            d="M411.488,512c-12.555,0-22.768-10.213-22.768-22.768V22.768C388.72,10.213,398.934,0,411.488,0 s22.768,10.213,22.768,22.768v466.464C434.256,501.787,424.043,512,411.488,512z">
                                        </path>
                                        <path style="fill:#0f73bd;"
                                            d="M100.512,512c-12.555,0-22.768-10.213-22.768-22.768V22.768C77.744,10.213,87.957,0,100.512,0 s22.768,10.213,22.768,22.768v466.464C123.28,501.787,113.066,512,100.512,512z">
                                        </path>
                                    </g>
                                    <g>
                                        <path style="fill:#0f73bd;"
                                            d="M416.486,489.232V22.768c0-7.327,3.493-13.837,8.885-18.004C421.524,1.789,416.716,0,411.488,0 c-12.555,0-22.768,10.213-22.768,22.768v466.464c0,12.555,10.213,22.768,22.768,22.768c5.228,0,10.036-1.789,13.883-4.763 C419.979,503.069,416.486,496.559,416.486,489.232z">
                                        </path>
                                        <path style="fill:#0f73bd;"
                                            d="M105.51,489.232V22.768c0-7.327,3.493-13.837,8.885-18.004C110.548,1.789,105.74,0,100.512,0 C87.957,0,77.744,10.213,77.744,22.768v466.464c0,12.555,10.213,22.768,22.768,22.768c5.228,0,10.036-1.789,13.883-4.763 C109.003,503.069,105.51,496.559,105.51,489.232z">
                                        </path>
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




                <div class="flex md:flex-row flex-col items-center">
                    <div class="bg-[#e6e6e9] flex md:w-32 md:h-24 w-36 h-28 justify-center items-center rounded-xl">
                        <svg class="w-14" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
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
                        </svg>
                    </div>

                    <x-forms.card-text title="RICHIEDI I PREMI SCONTO"
                        description="Richiedi i premi sconto raggiunti in cassa o online."></x-forms.card-text>

                    <x-forms.card-text-sm title="RICHIEDI I PREMI SCONTO"
                        description="Richiedi i premi sconto raggiunti in cassa o online."></x-forms.card-text-sm>

                </div>




                <div class="flex md:flex-row flex-col items-center ">
                    <div class="bg-[#e6e6e9] flex  md:w-32 md:h-24 w-36 h-28 justify-center  items-center rounded-xl ">
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
