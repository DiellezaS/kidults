<meta name="viewport" content="width=device-width, initial-scale=1">
<div {{ $attributes->merge(['class' => 'text-center font md:space-y-3 space-y-5 leading-4 font-medium']) }}>
  

@foreach($interessi as $interesse)
    <x-forms.toggle class="toggle-btn" name="interessi[]" type="checkbox" id="interesse{{ $interesse->id }}" value="{{ $interesse->id }}"></x-forms.checkbox>
    <x-forms.toggle-label name="{{ $interesse->interessi }}" for="interesse{{ $interesse->id }}" class="lg:px-7 px-4 py-4 lg:text-base text-sm "></x-forms.checkbox-label>
@endforeach
</div>



{{-- <script>
 document.addEventListener("DOMContentLoaded", function() {
    const toggleLabels = document.querySelectorAll('.toggle-label');

    // Function to update selected state based on checkbox state
    function updateSelectedState(toggleLabel, toggleBtn) {
        if (toggleBtn.checked) {
            toggleLabel.classList.add('selected');
        } else {
            toggleLabel.classList.remove('selected');
        }
    }

    // Loop through each toggle label
    toggleLabels.forEach(function(toggleLabel) {
        const toggleBtn = toggleLabel.previousElementSibling;
        
        // Update initial state based on checkbox status
        updateSelectedState(toggleLabel, toggleBtn);

        // Event listener for click on label
        toggleLabel.addEventListener('click', function() {
            toggleBtn.checked = !toggleBtn.checked; // Toggle checkbox
            updateSelectedState(toggleLabel, toggleBtn); // Update selected state
        });
    });
});
</script> --}}


{{-- 
<script>document.addEventListener("DOMContentLoaded", function() {
    const toggleBtns = document.querySelectorAll('input[type="checkbox"].toggle-btn');

    // Initialize selected interests from local storage
    const selectedInterests = JSON.parse(localStorage.getItem('selectedInterests')) || [];

    toggleBtns.forEach(function(toggleBtn) {
        const toggleLabel = document.querySelector('label[for="' + toggleBtn.id + '"]');
        
        // Check if this interest is in selectedInterests
        if (selectedInterests.includes(toggleBtn.id)) {
            toggleBtn.checked = true;
            toggleLabel.classList.add('selected');
        }

        toggleBtn.addEventListener('change', function() {
            if (toggleBtn.checked) {
                toggleLabel.classList.add('selected');
                selectedInterests.push(toggleBtn.id);
            } else {
                toggleLabel.classList.remove('selected');
                const index = selectedInterests.indexOf(toggleBtn.id);
                if (index !== -1) {
                    selectedInterests.splice(index, 1);
                }
            }
            // Update local storage
            localStorage.setItem('selectedInterests', JSON.stringify(selectedInterests));
        });
    });
});
</script> --}}



<script>
 document.addEventListener("DOMContentLoaded", function() {
        fetch('/getUserInterests')
       .then(response => response.json())
       .then(existingInterestIds => {
            const elements = document.querySelectorAll('.toggle-label');
            existingInterestIds.forEach(id => {
                const checkbox = document.querySelector(`#interesse${id}`);
                const label = document.querySelector(`[for='interesse${id}']`);
                if (label && checkbox) {
                    checkbox.addEventListener('change', function() {
                        if (this.checked) {
                            label.classList.add('selected');
                            label.style.backgroundColor = '#D6F5D6'; // Green background
                        } else {
                            label.style.backgroundColor = 'white'; // White background
                        }
                    });
                    if (existingInterestIds.includes(id)) {
                        label.classList.add('selected');
                    }
                }
            });
        })
       .catch(error => console.error('Error:', error));
});
</script>



    