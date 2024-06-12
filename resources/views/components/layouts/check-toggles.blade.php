<meta name="viewport" content="width=device-width, initial-scale=1">
<div {{ $attributes->merge(['class' => 'text-center font md:space-y-3 space-y-5 leading-4 font-medium']) }}>
  


{{-- <div class="text-center font md:space-y-3 space-y-5 leading-4 font-medium"> --}}
  @foreach($interessi as $interesse)
  <x-forms.toggle class="toggle-btn" name="{{ $interesse->interessi }}" type="checkbox" id="id{{ $interesse->id }}"></x-forms.toggle>
  <x-forms.toggle-label name="{{ $interesse->interessi }}" for="id{{ $interesse->id }}" class="lg:px-7 px-4 py-4 lg:text-base text-sm"></x-forms.toggle-label>
@endforeach
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