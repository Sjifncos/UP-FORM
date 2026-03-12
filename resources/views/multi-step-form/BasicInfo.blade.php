<div class="step" data-step="3">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        <h1 class="text-[24px] font-semibold text-[#850038]">
            Basic Information
        </h1>
        <div class="col-span-1 md:col-span-2">
            <label for="degreeprogram" class="font-medium">
                Degree Program <span class="text-red-500">*</span>
            </label>
            <select id="degreeprogram" name="degreeprogram" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
                    focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-1 
                    appearance-none">
                <option value="" disabled selected>Autofill</option>
                
                <option value="AA Sports Studies">AA Sports Studies</option>
                <option value="B Fine Arts (Product Design)">B Fine Arts (Product Design)</option>
                <option value="B Fine Arts (Studio Arts)">B Fine Arts (Studio Arts)</option>
                <option value="B Physical Education">B Physical Education</option>
                <option value="B Sports Science">B Sports Science</option>
                <option value="BA Communication">BA Communication</option>
                <option value="BA Political Science">BA Political Science</option>
                <option value="BA Psychology">BA Psychology</option>
                <option value="BA Psychology (2005 curriculum)">BA Psychology (2005 curriculum)</option>
                <option value="BS Accountancy">BS Accountancy</option>
                <option value="BS Biology">BS Biology</option>
                <option value="BS Biology (2005 curriculum)">BS Biology (2005 curriculum)</option>
                <option value="BS Computer Science">BS Computer Science</option>
                <option value="BS Management">BS Management</option>
                <option value="BS Management (Finance)">BS Management (Finance)</option>
                <option value="BS Management (Marketing)">BS Management (Marketing)</option>
                <option value="BS Mathematics">BS Mathematics</option>
                <option value="BS Statistics">BS Statistics</option>
                <option value="C Fine Arts (Product Design)">C Fine Arts (Product Design)</option>
                <option value="C Fine Arts (Studio Arts)">C Fine Arts (Studio Arts)</option>
                <option value="Master in Public Affairs (Agrarian and Rurban Development Studies)">Master in Public Affairs (Agrarian and Rurban Development Studies)</option>
                <option value="Master in Public Affairs (Education Management)">Master in Public Affairs (Education Management)</option>
                <option value="Master in Public Affairs (Strategic Planning and Public Policy)">Master in Public Affairs (Strategic Planning and Public Policy)</option>
                <option value="Master of Arts in Communication and Media">Master of Arts in Communication and Media</option>
                <option value="Master of Business Administration">Master of Business Administration</option>
                <option value="Master of Education (Biology)">Master of Education (Biology)</option>
                <option value="Master of Education (Chemistry)">Master of Education (Chemistry)</option>
                <option value="Master of Education (English as a Second Language)">Master of Education (English as a Second Language)</option>
                <option value="Master of Education (Filipino)">Master of Education (Filipino)</option>
                <option value="Master of Education (Mathematics)">Master of Education (Mathematics)</option>
                <option value="Master of Education (Physics)">Master of Education (Physics)</option>
                <option value="Master of Education (Social Studies)">Master of Education (Social Studies)</option>
                <option value="Master of Science in Computer Science">Master of Science in Computer Science</option>
                <option value="Master of Science in Environmental Science">Master of Science in Environmental Science</option>
                <option value="Master of Science in Environmental Studies">Master of Science in Environmental Studies</option>
                <option value="Master of Science in Mathematics (Applied Mathematics)">Master of Science in Mathematics (Applied Mathematics)</option>
                <option value="Master of Science in Mathematics (Mathematics Education)">Master of Science in Mathematics (Mathematics Education)</option>
                <option value="Master of Science in Mathematics (Pure Mathematics)">Master of Science in Mathematics (Pure Mathematics)</option>
                <option value="Professional Master in Data Science (Computing)">Professional Master in Data Science (Computing)</option>
                
            </select>
                <p class="text-[12px] text-gray-500 mt-1">
                    Please Contact The <span class="font-semibold text-[#850038]">OUR</span> if the degree program is incorrect
                </p>
        </div>
        <div class="relative w-full">
            <label for="first_name" class="font-medium">
                First Name
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="first_name" name="first_name" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none 
                    border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="middle_name" class="font-medium">
                Middle Name
            </label>
            <input required id="middle_name" name="middle_name" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none 
                    border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        
        {{-- commented out floating label examples --}}
        
        <div class="relative w-full">
            <label for="last_name" class="font-medium">
                Last Name<span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="last_name" name="last_name" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none 
                    border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <!-- Name Suffix -->
        <div class="relative w-full">
            <label for="name_suffix" class="font-medium">
                Name Suffix
            </label>
            <select id="name_suffix" name="name_suffix" required
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
                focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2 appearance-none">
                <option value="" disabled selected>Please Select</option>
                <option value="none">None</option>
                <option value="jr">Jr.</option>
                <option value="sr">Sr.</option>
                <option value="ii">II</option>
                <option value="iii">III</option>
                <option value="iv">IV</option>
                <option value="v">V</option>
                <option value="vi">VI</option>
                <option value="vii">VII</option>
                <option value="viii">VIII</option>
                <option value="ix">IX</option>
                <option value="x_higher">X or Higher</option>
            </select>
            <p class="text-[12px] text-gray-500 mt-1">Please Select if your legal name includes a suffix</p>
        </div>

        <!-- Birth Date (split into Year, Month, Day) -->
        <div class="relative w-full">
            <label class="font-medium">Birth Date</label><span class="text-red-500 ml-1">*</span>
            <div class="flex gap-2 mt-2">
                <!-- Month -->
                <select id="dob_month" class="w-1/3 px-4 py-3 text-base bg-white outline-none border-2 
                border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors
                appearance-none">
                    <option value="">Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <!-- Day -->
                <select id="dob_day" class="w-1/3 px-4 py-3 text-base bg-white outline-none border-2 
                border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors
                appearance-none">
                    <option value="">Day</option>
                    <!-- days 1-31 will be populated by JS -->
                </select>
                <!-- Year -->
                <select id="dob_year" class="w-1/3 px-4 py-3 text-base bg-white outline-none 
                border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors
                appearance-none">
                    <option value="">Year</option>
                    <!-- years will be populated by JS -->
                </select>
            </div>
            <!-- Hidden input to hold combined YYYY-MM-DD value for the server -->
            <input type="hidden" id="dob" name="dob" />
        </div>
                
        <!-- Sex at Birth -->
        <div class="relative w-full">
            <label for="sexatbirth" class="font-medium">Sex at Birth</label><span class="text-red-500 ml-1">*</span>
            <select id="sexatbirth" name="sexatbirth" required
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none 
                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
                appearance-none">
                <option value="" disabled selected>Please Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <!-- Birth Place -->
        <div class="md:col-span-1 flex flex-col w-full">
            <label for="birthplace" class="font-medium">
                Birth Place <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="birthplace" name="birthplace" type="text"
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">ex. Cebu City</p>
        </div>

        <!-- Civil Status -->
        <div class="md:col-span-1 flex flex-col w-full">
            <label for="civilstatus" class="font-medium">
                Civil Status<span class="text-red-500 ml-1">*</span>
            </label>
            <select id="civilstatus" name="civilstatus" required
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none 
                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
                appearance-none">
                <option value="" disabled selected>Please Select</option>
                <option value="single">Single (never married)</option>
                <option value="married">Married</option>
                <option value="separated">Separated (legally or de facto)</option>
                <option value="annuled">Annulled / Marriage declared null and void</option>
                <option value="widowed">Widowed</option>
                <option value="livin">Living with partner / Cohabiting</option>
                <option value="noans">Prefer not to answer</option>
            </select>
        </div>

        <!-- Marriage Section (hidden by default) -->
        <div id="marriagesection" class="col-span-1 md:col-span-2 hidden">
            <!-- Marriage Date -->
            <div class="mb-6">
                <label for="marriagedate" class="font-medium">Marriage Date <span class="text-red-500 ml-1">*</span></label>
                <div class="flex gap-2 mt-2">
                    <!-- Month -->
                    <select id="marriage_month" class="w-1/3 px-4 py-3 text-base bg-white outline-none border-2 
                    border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors 
                    appearance-none">
                        <option value="">Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <!-- Day -->
                    <select id="marriage_day" class="w-1/3 px-4 py-3 text-base bg-white outline-none border-2 
                    border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors
                    appearance-none">
                        <option value="">Day</option>
                        <!-- days 1-31 will be populated by JS -->
                    </select>
                    <!-- Year -->
                    <select id="marriage_year" class="w-1/3 px-4 py-3 text-base bg-white outline-none border-2 
                    border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors
                    appearance-none">
                        <option value="">Year</option>
                        <!-- years will be populated by JS -->
                    </select>
                </div>
                <!-- Hidden input to hold combined YYYY-MM-DD value for the server -->
                <input type="hidden" id="marriagedate" name="marriagedate" />
            </div>
            <!-- Article 370 Info + Preferred Name (with ID) -->
            <div id="preferred_name_section" class="col-span-1 md:col-span-2 text-justify">
                <p class="text-black-700">
                    Under <span class="font-semibold text-[#850038]">
                        <a target="_blank" href="https://amslaw.ph/philippine-laws/civil-law/civil-code-of-the-philippines(4)"
                    class="font-medium text-[#850038] hover:text-[#850038]">
                        Article 370
                    </a>
                    </span>
                    of the Civil Code of the Philippines,
                    a married woman may choose how her name will appear after marriage.
                    While marriage does not legally require a change in name, the law allows a woman to:
                </p>

                <ol class="list-decimal pl-6 mt-3 space-y-3 marker:text-[#850038]">
                    <li id="fullmaidenname">
                        Retain her full maiden name
                        <span class="text-[#850038]">(Juana Luna Santos)</span>
                    </li>
                    <li id="hyphenatedsurname">
                        Use a hyphenated surname, combining her maiden surname and her husband’s surname
                        <span class="text-[#850038]">(Juana Luna Santos-Cruz)</span>
                    </li>
                    <li id="husbandsurname">
                        Adopt her husband’s surname by placing it after her maiden first name and surname
                        <span class="text-[#850038]">(Juana Santos Cruz)</span>
                    </li>
                    <!-- Husband's Surname (shown only for hyphenated or husband surname) -->
<div id="husband-surname-container" class="hidden mt-4">
    <label for="husband_surname" class="font-medium">
        Husband's Surname <span class="text-red-500">*</span>
    </label>
    <input type="text" id="husband_surname" name="husband_surname"
           class="w-full px-4 py-3 border-2 border-gray-300 rounded-md
                  focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                  transition-colors mt-1"
           placeholder="Enter husband's surname">
    <p class="text-[12px] text-gray-500 mt-1">Required if you choose hyphenated or husband's surname.</p>
</div>
                </ol>
                <p class="mt-3 text-black-700 font-semibold">
                    Please select one of the following options to help us record your preferred name format
                    for official and academic purposes.
                </p>
                <p class="mt-6 font-bold">
                    Preferred Name <span class="text-red-500 ml-1">*</span>
                </p>
                <div class="mt-3 space-y-3">
                    <label class="flex items-start gap-2 text-justify">
                        <input type="radio" name="name_format" value="maiden" class="mt-1 accent-[#0E6021]">
                        <span>Full maiden name (First name, Middle name, Surname)</span>
                    </label>
                    <label class="flex items-start gap-2 text-justify">
                        <input type="radio" name="name_format" value="hyphenated" class="mt-1 accent-[#0E6021]">
                        <span>Hyphenated surname (First name, Middle name, Surname-Husband's Surname)</span>
                    </label>
                    <label class="flex items-start gap-2 text-justify">
                        <input type="radio" name="name_format" value="husband" class="mt-1 accent-[#0E6021]">
                        <span>Husband's surname (First name, Surname, Husband's Surname)</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const civilStatus = document.getElementById('civilstatus');
    const marriageSection = document.getElementById('marriagesection');
    const marriageDate = document.getElementById('marriagedate');

    function toggleMarriageSection() {
        if (civilStatus.value === 'married') {
            marriageSection.classList.remove('hidden');
            marriageDate.setAttribute('required', 'required');
        } else {
            marriageSection.classList.add('hidden');
            marriageDate.removeAttribute('required');
            marriageDate.value = '';
        }
    }

    civilStatus.addEventListener('change', toggleMarriageSection);
    toggleMarriageSection();

    // Populate year dropdown (last 100 years)
    const currentYear = new Date().getFullYear();
    const yearSelect = $('#dob_year');
    for (let year = currentYear; year >= currentYear - 100; year--) {
        yearSelect.append(new Option(year, year));
    }

    // Populate day dropdown (1-31)
    const daySelect = $('#dob_day');
    for (let day = 1; day <= 31; day++) {
        const padded = day.toString().padStart(2, '0');
        daySelect.append(new Option(day, padded));
    }

    // Function to update the hidden dob field
    function updateDob() {
        const year = $('#dob_year').val();
        const month = $('#dob_month').val();
        const day = $('#dob_day').val();
        if (year && month && day) {
            $('#dob').val(`${year}-${month}-${day}`);
        } else {
            $('#dob').val('');
        }
    }

    $('#dob_year, #dob_month, #dob_day').on('change', updateDob);

    // Populate year dropdown for Marriage Date (from 1900 to current year)
    const marriageYearSelect = $('#marriage_year');
    for (let year = currentYear; year >= 1900; year--) {
        marriageYearSelect.append(new Option(year, year));
    }

    // Populate day dropdown for Marriage Date (1-31)
    const marriageDaySelect = $('#marriage_day');
    for (let day = 1; day <= 31; day++) {
        const padded = day.toString().padStart(2, '0');
        marriageDaySelect.append(new Option(day, padded));
    }

    // Function to update the hidden marriage date field
    function updateMarriageDate() {
        const year = $('#marriage_year').val();
        const month = $('#marriage_month').val();
        const day = $('#marriage_day').val();
        if (year && month && day) {
            $('#marriagedate').val(`${year}-${month}-${day}`);
        } else {
            $('#marriagedate').val('');
        }
    }

    $('#marriage_year, #marriage_month, #marriage_day').on('change', updateMarriageDate);

    // --- NEW: Hide preferred name section if male and married ---
    function togglePreferredNameVisibility() {
        const sex = $('#sexatbirth').val();
        const civilStatus = $('#civilstatus').val();
        if (civilStatus === 'married' && sex === 'male') {
            $('#preferred_name_section').addClass('hidden');
        } else {
            $('#preferred_name_section').removeClass('hidden');
        }
    }

    // Listen to changes on sex at birth and civil status
    $('#sexatbirth').on('change', togglePreferredNameVisibility);
    $('#civilstatus').on('change', togglePreferredNameVisibility);

    // Call once on page load to set initial state
    togglePreferredNameVisibility();

    
</script>