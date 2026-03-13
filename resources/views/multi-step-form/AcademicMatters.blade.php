<div class="step hidden" data-step="6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        <div class="col-span-1 md:col-span-2">
            <h1 class="text-[24px] font-semibold text-[#850038]">
                Academic Matters
            </h1>
        </div>
        {{--
        <!-- Senior High School Attended -->
        <div class="relative w-full">
            <input required id="seniorhighschoolattended" name="seniorhighschoolattended" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="seniorhighschoolattended" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                Senior High School Attended <span class="text-red-500 ml-1">*</span>
            </label>
            <span class="error-message text-red-500 text-sm hidden" data-for="seniorhighschoolattended"></span>
        </div>
        --}}
        <div class="relative w-full">
            <label for="seniorhighschoolattended" class="font-medium">
                Senior High School Attended
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="seniorhighschoolattended" name="seniorhighschoolattended" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none 
                    border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        {{--
        <!-- Location Of High School -->
        <div class="relative w-full">
            <input required id="locationofhighschool" name="locationofhighschool" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="locationofhighschool" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                Location of High School  <span class="text-red-500 ml-1">*</span>
            </label>
            <span class="error-message text-red-500 text-sm hidden" data-for="locationofhighschool"></span>
        </div>
        --}}
        <div class="relative w-full">
            <label for="locationofhighschool" class="font-medium">
                Location of High School
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="locationofhighschool" name="locationofhighschool" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none 
                    border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        
        <!-- Honors Received -->
        <div class="relative w-full">
                <label for="honorsreceived" name="locationofhighschool" class="font-medium">Honors received in Senior High School <span class="text-red-500 ml-1">*</span></label>
                <select id="honorsreceived" name="honorsreceived" required 
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
                focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
                appearance-none">
                    <option disabled selected>Please Select</option>
                    <option value="none">None</option>
                    <option value="honor">with Honors</option>
                    <option value="highhonor">with High Honors</option>
                    <option value="highesthonor">with Highest Honors</option>
                </select>
                <span class="error-message text-red-500 text-sm hidden" data-for="honorsreceived"></span>
        </div>
        <!-- Scholarship Question -->
        <div class="relative w-full">
            <label for="scholarship" class="font-medium">
                Are you on a scholarship other than <span class="font-semibold text-[#850038]">RA 10931</span>
                <span class="text-red-500 ml-1">*</span>
            </label>
            <select id="scholarship" name="scholarship" required
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none
                    focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
                    appearance-none">
                <option disabled selected>Please Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <span class="error-message text-red-500 text-sm hidden" data-for="scholarship"></span>
            <p class="text-[12px] text-gray-500 mt-1">(e.g. from government agencies or private institutions)</p>
        </div>
        <!-- Specify Scholarship -->
        <div id="specifyScholarshipWrapper" class="col-span-1 md:col-span-2 hidden">
            {{--
            <div class="relative w-full">
                <input id="specifyscholarship" name="specifyscholarship" type="text"
                    class="peer w-full px-4 py-3 text-base bg-white outline-none border-2
                        border-gray-300 rounded-md focus:border-[#0E6021]
                        focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="specifyscholarship"
                    class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm
                        text-gray-500 pointer-events-none transition-all duration-150
                        peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021]
                        peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Please specify the scholarship. <span class="text-red-500 ml-1">*</span>
                </label>
                <span class="error-message text-red-500 text-sm hidden" data-for="specifyscholarship"></span>
            </div>
            --}}
            <div class="relative w-full">
            <label for="specifyscholarship" class="font-medium">
                Please specify the scholarship.
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="specifyscholarship" name="specifyscholarship" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none 
                    border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
            <button class="bg-[#850038] hover:bg-[#FFAD0D] text-white py-2 px-4 rounded inline-flex items-center gap-2 mt-4"> 
                    <svg width="24" height="24" viewBox="0 0 24 24" role="img" 
                    xmlns="http://www.w3.org/2000/svg" aria-labelledby="addIconTitle" stroke="currentColor" 
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"> 
                        <title id="addIconTitle">
                            Add
                        </title> <path d="M17 12L7 12M12 17L12 7"/> 
                        <circle cx="12" cy="12" r="10"/> 
                    </svg> 
                    Add another entry
            </button>
        </div>
    </div>
</div>
<script>
    const scholarshipSelect = document.getElementById('scholarship');
    const specifyWrapper = document.getElementById('specifyScholarshipWrapper');
    const specifyInput = document.getElementById('specifyscholarship');

    scholarshipSelect.addEventListener('change', function () {
        if (this.value === 'yes') {
            specifyWrapper.classList.remove('hidden');
            specifyInput.required = true;
        } else {
            specifyWrapper.classList.add('hidden');
            specifyInput.required = false;
            specifyInput.value = '';
        }
    });
</script>