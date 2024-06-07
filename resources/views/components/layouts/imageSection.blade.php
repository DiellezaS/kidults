<meta name="viewport" content="width=device-width, initial-scale=1">


<x-img.background-img>
  <div id="imgdiv">
    <div>
      @section('font')
      <x-text-divs.font-area class="lg:self-center lg:gap-6 lg:justify-self-center justify-self-start xl:ml-28" />
      @endsection
    </div>
    <div>
      @section('form')
      <x-layouts.pg1-form class="lg:justify-self-start lg:self-center  xl:px-20 xl:py-10 lg:px-7 px-10 py-12" />
      @endsection
    </div>
  </div>
</x-img.background-img>



<script>
    const dynamicHeightDiv = document.getElementById('dynamicHeightDiv');
    const elementFigure = document.getElementById('imgdiv');
    function updateDivHeight() {
        const totalContentHeight = elementFigure.scrollHeight - 590;
        dynamicHeightDiv.style.height = `${totalContentHeight}px`;
        console.log(dynamicHeightDiv)
    }
    updateDivHeight();
    window.addEventListener('resize', updateDivHeight);
</script>