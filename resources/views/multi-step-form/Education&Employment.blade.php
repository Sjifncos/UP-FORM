<div class="step hidden" data-step="7">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        <div class="col-span-1 md:col-span-2">
            <h1 class="text-[24px] font-semibold text-[#850038]">
                Education & Employment
            </h1>
        </div>
        <!-- Highest Educational Attainment -->
        <div class="relative w-full">
            <label for="educationalattainment" class="font-medium">What is your highest educational attainment? <span class="text-red-500 ml-1">*</span></label>
            <select id="educationalattainment" name="educationalattainment" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
            focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option disabled selected>Please Select</option>
                <option value="bachelorsdegree">Bachelor’s degree</option>
                <option value="postbaccalaureate">Post-baccalaureate diploma / certificate</option>
                <option value="mastersdegree">Master’s degree</option>
                <option value="postmasters">Post-master’s diploma / certificate</option>
                <option value="doctoral">Doctoral degree (PhD, EdD, DBA, etc.)</option>
            </select>
        </div>
        
        <div class="relative w-full">
            <label for="undergraddegree" class="font-medium">
                What is your undergraduate degree?
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="undergraddegree" name="undergraddegree" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none 
                    border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        
        <div class="relative w-full">
            <label for="listofdegree" class="font-medium">
               List any degrees, diplomas, or certificates
            </label>
            <input id="listofdegree" name="listofdegree" type="text" 
            class="peer w-full px-4 py-3 text-base bg-white outline-none
                    border-2 border-gray-300 rounded-md
                    focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                    transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">Completed after earning your bachelor’s degree.</p>
            <p class="text-[12px] text-gray-500 mt-1">Separate multiple entries with a comma.</p>
        </div>
        
         <div class="relative w-full">
            <label for="lastschoolattended" class="font-medium">
                What was the last school you attended?
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="lastschoolattended" name="lastschoolattended" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none 
                    border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        
        <!-- Primary Source Income -->
        <div class="relative w-full">
            <label for="typeofincome" class="font-medium">Primary Source of Income <span class="text-red-500 ml-1">*</span></label>
            <select id="typeofincome" name="typeofincome" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
            focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option disabled selected>Please Select</option>
                <option value="employeed">Employed (salary from an employer)</option>
                <option value="self-employeed">Self-employed / Freelance / Professional practice</option>
                <option value="combination">Combination of employment and self-employment</option>
                <option value="passiveincome">Passive income (e.g., investments, rental, family trust)</option>
                <option value="notearning">Not currently earning income</option>
            </select>
            <p class="text-[12px] text-gray-500 mt-1">Please select the option that represents your main source of income, even if you have multiple sources.</p>
        </div>
        
        <!-- Employer Fields Container - Hidden by default, shown when income type is not "notearning" -->
        <div id="employer-fields-container" class="contents hidden">
            <div class="relative w-full">
                <label for="nameofemployer" class="font-medium">
                    Name of Employer
                    <span class="text-red-500 ml-1">*</span>
                </label>
                <input id="nameofemployer" name="nameofemployer" type="text"
                    class="peer w-full px-4 py-3 text-base bg-white outline-none 
                        border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            </div>
             <div class="relative w-full">
                <label for="natureofwork" class="font-medium">
                    Nature of Work or Profession
                    <span class="text-red-500 ml-1">*</span>
                </label>
                <input id="natureofwork" name="natureofwork" type="text"
                    class="peer w-full px-4 py-3 text-base bg-white outline-none 
                        border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            </div>
        </div>
        
        <!-- Monthly Gross Earnings Container - Hidden by default -->
        <div id="income-container" class="relative w-full mt-[-2] hidden"> 
            <div class="relative w-full">
                <label for="income" class="font-medium">Monthly Gross Earnings (before taxes) <span class="text-red-500 ml-1">*</span></label>
                <select id="income" name="income" required 
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
                focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
                appearance-none">
                    <option disabled selected>Please Select</option>
                    <option value="below20k">Below ₱20,000</option>
                    <option value="20k-39k">₱20,000 - ₱39,999</option>
                    <option value="40k-59k">₱40,000 - ₱59,999</option>
                    <option value="60k-79k">₱60,000 - ₱79,999</option>
                    <option value="80k-99k">₱80,000 - ₱99,999</option>
                    <option value="100k-149k">₱100,000 - ₱149,999</option>
                    <option value="150kup">₱150,000 or higher</option>
                </select>
            </div>
        </div>
        
        <div class="col-span-1 md:col-span-2">
            <p class="font-medium">
                Primary Source(s) of Funding for Your Graduate Studies<br> (select all that apply)
                <span class="text-red-500">*</span>
            </p>
        </div>
        
        <div class="relative w-full space-y-3">
            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="personal_income" class="funding-checkbox h-4 w-4">
                <span>Personal income from employment or self-employment</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="savings" class="funding-checkbox h-4 w-4">
                <span>Savings / personal funds</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="family_support" class="funding-checkbox h-4 w-4">
                <span>Family support</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="up_scholarship" class="funding-checkbox h-4 w-4">
                <span>UP scholarship or fellowship</span>
            </label>

            <label class="flex items-center space-x-2 -mt-4">
                <input type="checkbox" id="funding-other" name="funding_sources[]" value="other" class="funding-checkbox h-4 w-4">
                <span>Other (Please Specify)</span>
            </label>

        </div>
        
        <div class="relative w-full space-y-3">
            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="private_scholarship" class="funding-checkbox h-4 w-4">
                <span>Private scholarship or fellowship</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="government_scholarship" class="funding-checkbox h-4 w-4">
                <span>Government scholarship (non-UP)</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="employer_sponsorship" class="funding-checkbox h-4 w-4">
                <span>Employer sponsorship / study leave with pay</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="educational_loan" class="funding-checkbox h-4 w-4">
                <span>Educational loan</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" name="funding_sources[]" value="passive_income" class="funding-checkbox h-4 w-4">
                <span>Passive income</span>
            </label>
        </div>
        
        <div id="funding-other-wrapper" class="col-span-1 md:col-span-2 hidden">
            <div class="relative w-full">
                <label for="funding-other-input" class="font-medium">
                    Please Specify the other fundings.
                </label>
                <input id="funding-other-input" name="funding-other-input" type="text" 
                    class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            </div>
        </div>
    </div> 
</div>

<script>
    // Handle income type change to show/hide employer fields and monthly earnings
    document.getElementById('typeofincome').addEventListener('change', function() {
        const employerFieldsContainer = document.getElementById('employer-fields-container');
        const incomeContainer = document.getElementById('income-container');
        const nameOfEmployer = document.getElementById('nameofemployer');
        const natureOfWork = document.getElementById('natureofwork');
        const income = document.getElementById('income');
        
        if (this.value === 'notearning') {
            // Hide the containers
            employerFieldsContainer.classList.add('hidden');
            incomeContainer.classList.add('hidden');
            
            // Remove required attributes
            nameOfEmployer.removeAttribute('required');
            natureOfWork.removeAttribute('required');
            income.removeAttribute('required');
            
            // Clear the values
            nameOfEmployer.value = '';
            natureOfWork.value = '';
            income.value = '';
        } else {
            // Show the containers
            employerFieldsContainer.classList.remove('hidden');
            incomeContainer.classList.remove('hidden');
            
            // Add required attributes back
            nameOfEmployer.setAttribute('required', 'required');
            natureOfWork.setAttribute('required', 'required');
            income.setAttribute('required', 'required');
        }
    });

    // Show/hide other funding input field
    document.getElementById('funding-other').addEventListener('change', function() {
        const otherWrapper = document.getElementById('funding-other-wrapper');
        const otherInput = document.getElementById('funding-other-input');
        
        if (this.checked) {
            otherWrapper.classList.remove('hidden');
            otherInput.setAttribute('required', 'required');
        } else {
            otherWrapper.classList.add('hidden');
            otherInput.removeAttribute('required');
            otherInput.value = ''; // Clear the value when hidden
        }
    });

    // Optional: Add validation to ensure at least one checkbox is selected before form submission
    document.querySelector('form').addEventListener('submit', function(e) {
        const checkboxes = document.querySelectorAll('.funding-checkbox:checked');
        if (checkboxes.length === 0) {
            e.preventDefault();
            alert('Please select at least one funding source.');
        }
    });
</script>