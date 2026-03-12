tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                palatino: ['Palatino', 'Palatino Linotype', 'serif'],
                poppins: ['Poppins','sans-serif'],
            },
        },
    },
};

$(document).ready(function() {
    // CSRF token setup (kept for any future AJAX, but not used now)
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ---------- Step Navigation Variables ----------
    let currentStep = 1;
    let maxStepReached = 1;                // used for progress counter (based on original step numbers)
    let totalSteps = 10;                     // will be updated based on visible steps
    let visibleSteps = [1,2,3,4,5,6,7,8,9,10]; // default (all steps)
    let maxVisibleIndex = 0;                 // index in visibleSteps of the furthest step reached

    // ---------- Toast Notification System ----------
    const activeToastMessages = new Set();

    function showToast(message, type = 'error') {
        if (activeToastMessages.has(message)) return;

        const toastId = 'toast-' + Date.now() + '-' + Math.random().toString(36).substr(2, 9);
        const bgColor = type === 'success' ? 'bg-green-500' : 'bg-[#FF3131]';
        const icon = type === 'success' 
            ? '' // for SVG
            : '';

        const toastHtml = `
            <div id="${toastId}" class="flex items-center justify-between ${bgColor} text-white px-4 py-3 rounded-lg shadow-lg transform transition-all duration-300 translate-x-0 opacity-100">
                <div class="flex items-center space-x-2">
                    ${icon}
                    <span class="text-sm font-medium">${message}</span>
                </div>
                <button class="ml-4 text-white hover:text-gray-200 focus:outline-none close-toast-btn" data-toast-id="${toastId}">
                    <svg fill="#ffffff" width="18px" height="18px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                        <path d="M128,20.00012a108,108,0,1,0,108,108A108.12217,108.12217,0,0,0,128,20.00012Zm0,192a84,84,0,1,1,84-84A84.0953,84.0953,0,0,1,128,212.00012Zm40.48535-107.51465L144.9707,128.00012l23.51465,23.51465a12.0001,12.0001,0,0,1-16.9707,16.9707L128,144.97082l-23.51465,23.51465a12.0001,12.0001,0,0,1-16.9707-16.9707l23.51465-23.51465L87.51465,104.48547a12.0001,12.0001,0,0,1,16.9707-16.9707L128,111.02942l23.51465-23.51465a12.0001,12.0001,0,0,1,16.9707,16.9707Z"/>
                    </svg>
                </button>
            </div>
        `;

        $('#toastContainer').append(toastHtml);
        const $toast = $(`#${toastId}`);
        $toast.data('message', message);
        activeToastMessages.add(message);

        const timeoutId = setTimeout(() => {
            closeToast(toastId);
        }, 3000);
        $toast.data('timeoutId', timeoutId);
    }

    window.closeToast = function(id) {
        const $toast = $(`#${id}`);
        if (!$toast.length) return;

        const message = $toast.data('message');
        if (message) activeToastMessages.delete(message);

        const timeoutId = $toast.data('timeoutId');
        if (timeoutId) clearTimeout(timeoutId);
        $toast.fadeOut(300, function() { $(this).remove(); });
    };

    $(document).on('click', '.close-toast-btn', function() {
        closeToast($(this).data('toast-id'));
    });

    // ---------- Step Visibility Based on Category ----------
    function updateVisibleSteps() {
        const category = $('#category').val();
        let newVisibleSteps;

        if (!category) {
            newVisibleSteps = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        } else if (category === 'graduate') {
            newVisibleSteps = [1, 2, 3, 4, 5, 7, 8, 9, 10];   // skip step 6 (AcademicMatters)
        } else if (category === 'undergraduate') {
            newVisibleSteps = [1, 2, 3, 4, 5, 6, 8, 9, 10];   // skip step 7 (Education&Employment)
        }
        // Only update if the list actually changed
        if (JSON.stringify(visibleSteps) !== JSON.stringify(newVisibleSteps)) {
            visibleSteps = newVisibleSteps;

            // Show/hide step containers
            $('.step').each(function() {
                const stepNum = parseInt($(this).data('step'));
                if (visibleSteps.includes(stepNum)) {
                    $(this).removeClass('hidden');
                } else {
                    $(this).addClass('hidden');
                }
            });

            // Show/hide progress bar labels
            $('.step-label').each(function() {
                const stepNum = parseInt($(this).data('step'));
                if (visibleSteps.includes(stepNum)) {
                    $(this).removeClass('hidden');
                } else {
                    $(this).addClass('hidden');
                }
            });

            // If the current step is now hidden, move to the first visible step
            if (!visibleSteps.includes(currentStep)) {
                currentStep = visibleSteps[0];
                maxVisibleIndex = 0;
            } else {
                // Keep maxVisibleIndex at least the current index
                maxVisibleIndex = Math.max(maxVisibleIndex, visibleSteps.indexOf(currentStep));
            }

            totalSteps = visibleSteps.length;
            $('#stepCounter').text(`Step Completed ${maxVisibleIndex} / ${totalSteps}`);
            showStep(currentStep);
        }
    }

    // --- Helper: Toggle marriage certificate field in Step 8 ---
    function toggleMarriageCertificate() {
        const civilStatus = $('#civilstatus').val();
        if (civilStatus === 'married') {
            $('#marriage_certificate_container').removeClass('hidden');
        } else {
            $('#marriage_certificate_container').addClass('hidden');
            // Optionally clear the file input when hidden
            $('#marriage_certificate_container input[type="file"]').val('');
        }
    }

    // --- NEW: Helper: Toggle PWD card container in Step 9 ---
    function togglePWDContainer() {
        const pwdValue = $('#pwd').val();
        if (pwdValue === 'Yes') {
            $('#pwd_card_container').removeClass('hidden');
        } else {
            $('#pwd_card_container').addClass('hidden');
            // Clear the file input when hidden
            $('#pwd_card_container input[type="file"]').val('');
        }
    }

    // ---------- Show Step (modified to include marriage toggle for step 8 and PWD toggle for step 9) ----------
    function showStep(step) {
        // Hide all steps, then show the current one
        $('.step').addClass('hidden');
        $(`.step[data-step="${step}"]`).removeClass('hidden');

        // Highlight the correct step label
        $('.step-label')
            .removeClass('text-[#850038] border-b-2 border-[#850038]')
            .addClass('text-slate-400');
        $(`.step-label[data-step="${step}"]`)
            .removeClass('text-slate-400')
            .addClass('text-[#850038] border-b-2 border-[#850038]');

        // Update step counter using visibleSteps index
        const currentIndex = visibleSteps.indexOf(step);
        if (currentIndex > maxVisibleIndex) {
            maxVisibleIndex = currentIndex;
        }
        $('#stepCounter').text(`Step Completed ${maxVisibleIndex} / ${totalSteps}`);

        // Handle navigation buttons
        $('#prevBtn').toggle(currentIndex !== 0);   // hide on first visible step
        if (currentIndex === totalSteps - 1) {      // last visible step
            $('#nextBtn').hide();
            $('#submitBtn').removeClass('hidden');
            const bothChecked = $('#confirmation').is(':checked') && $('#data-privacy').is(':checked');
            $('#submitBtn').prop('disabled', !bothChecked);
            if (!bothChecked) {
                $('#submitBtn').addClass('opacity-50 cursor-not-allowed');
            } else {
                $('#submitBtn').removeClass('opacity-50 cursor-not-allowed');
            }
        } else {
            $('#nextBtn').show();
            $('#submitBtn').addClass('hidden');
        }

        // Step 1 agreement toggle
        if (step === 1) {
            const isChecked = $('#agreement').is(':checked');
            $('#nextBtn').prop('disabled', !isChecked);
            if (!isChecked) {
                $('#nextBtn').addClass('opacity-50 cursor-not-allowed');
            } else {
                $('#nextBtn').removeClass('opacity-50 cursor-not-allowed');
            }
        } else {
            $('#nextBtn').prop('disabled', false).removeClass('opacity-50 cursor-not-allowed');
        }

        // When step 8 is shown, update marriage certificate visibility
        if (step === 8) {
            toggleMarriageCertificate();
        }

        // When step 9 is shown, update PWD card visibility
        if (step === 9) {
            togglePWDContainer();
        }
    }

    // ---------- Validation Function (modified to include PWD card in step 9) ----------
    function validateStep(step) {
        let errors = [];
        const $step = $(`.step[data-step="${step}"]`);
        
        // Remove all previous error styling
        $step.find('input, select, textarea').removeClass('border-red-500');
        $step.find('.mb-6').removeClass('border-red-500 border rounded p-2');
        $step.find('.border-red-500').removeClass('border-red-500');

        // Get citizenship value to check if foreign fields should be required
        const citizenship = $('#citizenship').val();
        const isNonPhilippineCitizen = citizenship === 'no';

        // Get typeofincome value for conditional validation
        const typeofincome = $('#typeofincome').val();
        const isNotEarning = typeofincome === 'notearning';

        // Validate all visible fields in this step
        $step.find('input:not([type="radio"]), select, textarea').each(function () {
            const $field = $(this);
            const fieldName = $field.attr('name');
            
            // Skip fields that are in hidden containers
            if ($field.closest('[style*="display: none"]').length > 0) {
                return;
            }

            // Skip fields that are disabled
            if ($field.prop('disabled')) {
                return;
            }

            // Skip fields that are in hidden containers (like employer fields when not earning)
            if ($field.closest('.hidden').length > 0) {
                return;
            }

            let value = $field.val();
            if (typeof value === 'string') value = value.trim();

            // Get label text for error message
            let label = fieldName;
            const $label = $field.closest('.mb-4, .relative, .flex-col, .md\\:col-span-1').find('label').first();
            if ($label.length) {
                label = $label.text().replace('*', '').trim();
            }

            // Required field validation
            const requiredFields = [
                // Basic Information
                'student_number',
                'category',
                'degreeprogram',
                'first_name',
                'last_name',
                'dob',
                'sexatbirth',
                'birthplace',
                'civilstatus',

                // Contact Details
                'citizenship',
                'streetaddressline1_ph',
                'region',
                'province',
                'city',
                'barangay',
                'PSGC',
                'personalemail',
                'mobilenumber',

                // Academic Matters
                'seniorhighschoolattended',
                'locationofhighschool',
                'honorsreceived',
                'scholarship',

                // Education & Employment
                'educationalattainment',
                'undergraddegree',
                'lastschoolattended',
                'typeofincome',
                'funding_sources',
                
                // Other Info
                'firstperson_to_attend_college',
                'firstpersonup',
                'annualincome',
                'pwd',
                'support-specify',
                'ipra',
                'ipra_specify',
                'indigenous_group'
            ];

            // Conditional fields that are required based on typeofincome
            const conditionalFields = [
                'nameofemployer',
                'natureofwork',
                'income'
            ];

            // Foreign fields that are required when citizenship is 'no'
            const foreignFields = [
                'citizenship_country',
                'outside_ph_addressline1',
                'outside_ph_addressline2',
                'city_foreign',
                'state/province_foreign',
                'zipcode_foreign',
                'foreign_country'
            ];

            // Check if field is required
            let isRequired = requiredFields.includes(fieldName);
            
            // Special handling for conditional fields (nameofemployer, natureofwork, income)
            if (conditionalFields.includes(fieldName)) {
                isRequired = !isNotEarning; // Required only if NOT "notearning"
            }
            
            // Special handling for foreign fields
            if (foreignFields.includes(fieldName)) {
                isRequired = isNonPhilippineCitizen;
            }

            // Perform validation for required fields
            if (isRequired && !value) {
                errors.push(`${label} is required.`);
                $field.addClass('border-red-500');
            }

            // UP Student Number format: 20xx-xxxx or 20xx-xxxxx
            if (fieldName === 'student_number' && value) {
                const studentNumberRegex = /^20\d{2}\d{4,5}$/;
                if (!studentNumberRegex.test(value)) {
                    errors.push(`UP Student Number must be in the format 20xx-xxxx or 20xx-xxxxx.`);
                    $field.addClass('border-red-500');
                }
            }

            // UP Email must end with @up.edu.ph
            if (fieldName === 'UP_email' && value) {
                const upEmailRegex = /^[a-zA-Z0-9._%+-]+@up\.edu\.ph$/;
                if (!upEmailRegex.test(value)) {
                    errors.push(`UP E-mail Address must be a valid @up.edu.ph email.`);
                    $field.addClass('border-red-500');
                }
            }

            // Personal email format
            if (fieldName === 'personalemail' && value) {
                const emailPattern = /^\S+@\S+\.\S+$/;
                if (!emailPattern.test(value)) {
                    errors.push(`Please enter a valid email address.`);
                    $field.addClass('border-red-500');
                }
            }

            if (fieldName === 'fathers_email' && value) {
                const emailPattern = /^\S+@\S+\.\S+$/;
                if (!emailPattern.test(value)) {
                    errors.push(`Please enter a valid email address.`);
                    $field.addClass('border-red-500');
                }
            }
            if (fieldName === 'mother_email' && value) {
                const emailPattern = /^\S+@\S+\.\S+$/;
                if (!emailPattern.test(value)) {
                    errors.push(`Please enter a valid email address.`);
                    $field.addClass('border-red-500');
                }
            }
            if (fieldName === 'guardian_email' && value) {
                const emailPattern = /^\S+@\S+\.\S+$/;
                if (!emailPattern.test(value)) {
                    errors.push(`Please enter a valid email address.`);
                    $field.addClass('border-red-500');
                }
            }

            // ZIP Code (4 digits)
            if (fieldName === 'zipcode_foreign' && value) {
                if (!/^\d{4}$/.test(value)) {
                    errors.push(`ZIP Code must be 4 digits only.`);
                    $field.addClass('border-red-500');
                }
            }

           
            if (fieldName === 'landlinenumber' && value) {
                if (!/^\d{7,8}$/.test(value)) {
                    errors.push(`Landline number is invalid`);
                    $field.addClass('border-red-500');
                }
            }


            // Phone validation
            if (fieldName === 'mobilenumber' && value) {
                // Remove spaces, hyphens, parentheses
                const cleanNumber = value.replace(/[\s\-\(\)]/g, '');
                
                // Check for PH mobile formats: 09XXXXXXXXX (11 digits)
                const isValid = /^0\d{10}$/.test(cleanNumber);     
                
                if (!isValid) {
                    errors.push(`Phone number is invalid. Please enter a valid Philippines mobile number.`);
                    $field.addClass('border-red-500');
                }
            }

            if (fieldName === 'emergency_phonenumber' && value) {
                // Remove spaces, hyphens, parentheses
                const cleanNumber = value.replace(/[\s\-\(\)]/g, '');
                
                // Check for PH mobile formats: 09XXXXXXXXX (11 digits)
                const isValid = /^0\d{10}$/.test(cleanNumber);     
                
                if (!isValid) {
                    errors.push(`Phone number is invalid. Please enter a valid Philippines mobile number.`);
                    $field.addClass('border-red-500');
                }
            }

             if (fieldName === 'fathers_phonenumber' && value) {
                const cleanNumber = value.replace(/[\s\-\(\)]/g, '');
                
                // Check for PH mobile formats: 09XXXXXXXXX (11 digits)
                const isValid = /^0\d{10}$/.test(cleanNumber);     
                
                if (!isValid) {
                    errors.push(`Phone number is invalid. Please enter a valid Philippines mobile number.`);
                    $field.addClass('border-red-500');
                }
            }

            if (fieldName === 'mother_phonenumber' && value) {
                const cleanNumber = value.replace(/[\s\-\(\)]/g, '');
                
                // Check for PH mobile formats: 09XXXXXXXXX (11 digits)
                const isValid = /^0\d{10}$/.test(cleanNumber);     
                
                if (!isValid) {
                    errors.push(`Phone number is invalid. Please enter a valid Philippines mobile number.`);
                    $field.addClass('border-red-500');
                }
            }

            if (fieldName === 'guardian_phonenumber' && value) {
                const cleanNumber = value.replace(/[\s\-\(\)]/g, '');
                
                // Check for PH mobile formats: 09XXXXXXXXX (11 digits)
                const isValid = /^0\d{10}$/.test(cleanNumber);     
                
                if (!isValid) {
                    errors.push(`Phone number is invalid. Please enter a valid Philippines mobile number.`);
                    $field.addClass('border-red-500');
                }
            }
            // Birth date validation (split fields)
            if (fieldName === 'dob') {
                const year = $('#dob_year').val();
                const month = $('#dob_month').val();
                const day = $('#dob_day').val();

                // Check if all parts are selected
                if (!year || !month || !day) {
                    errors.push(`Birth Date is required.`);
                    $('#dob_year, #dob_month, #dob_day').addClass('border-red-500');
                } else {
                    // Construct date string in YYYY-MM-DD format (using UTC to avoid timezone shifts)
                    const dateStr = `${year}-${month}-${day}`;
                    const birthDate = new Date(dateStr + 'T12:00:00Z');
                    const today = new Date();
                    today.setUTCHours(0, 0, 0, 0);

                    if (isNaN(birthDate.getTime())) {
                        errors.push(`Birth Date is invalid.`);
                        $('#dob_year, #dob_month, #dob_day').addClass('border-red-500');
                    } else {
                        // Future date check
                        if (birthDate > today) {
                            errors.push(`Birth date cannot be in the future.`);
                            $('#dob_year, #dob_month, #dob_day').addClass('border-red-500');
                        }

                        // Minimum age check (must be at least 18)
                        const minAgeDate = new Date(today);
                        minAgeDate.setUTCFullYear(today.getUTCFullYear() - 18);
                        if (birthDate > minAgeDate) {
                            errors.push(`You must be at least 18 years old.`);
                            $('#dob_year, #dob_month, #dob_day').addClass('border-red-500');
                        }

                        // Maximum age check (within last 70 years)
                        const maxAgeDate = new Date(today);
                        maxAgeDate.setUTCFullYear(today.getUTCFullYear() - 70);
                        if (birthDate < maxAgeDate) {
                            errors.push(`Birth date is invalid (must be within the last 70 years).`);
                            $('#dob_year, #dob_month, #dob_day').addClass('border-red-500');
                        }
                    }
                    
                }
            }

            // Marriage date validation (split fields)
            if (fieldName === 'marriagedate') {
                const year = $('#marriage_year').val();
                const month = $('#marriage_month').val();
                const day = $('#marriage_day').val();
                const civilStatus = $('#civilstatus').val();

                // Required when civil status is 'married'
                if (civilStatus === 'married') {
                    if (!year || !month || !day) {
                        errors.push(`Marriage Date is required when Married is selected.`);
                        $('#marriage_year, #marriage_month, #marriage_day').addClass('border-red-500');
                    } else {
                        // Construct date string in YYYY-MM-DD format
                        const dateStr = `${year}-${month}-${day}`;
                        const marriageDate = new Date(dateStr + 'T12:00:00Z');
                        const today = new Date();
                        today.setUTCHours(0, 0, 0, 0);

                        if (isNaN(marriageDate.getTime())) {
                            errors.push(`Marriage Date is invalid.`);
                            $('#marriage_year, #marriage_month, #marriage_day').addClass('border-red-500');
                        } else {
                            // Future date check
                            if (marriageDate > today) {
                                errors.push(`Marriage date cannot be in the future.`);
                                $('#marriage_year, #marriage_month, #marriage_day').addClass('border-red-500');
                            }

                            // Check against birth date
                            const birthYear = $('#dob_year').val();
                            const birthMonth = $('#dob_month').val();
                            const birthDay = $('#dob_day').val();
                            if (birthYear && birthMonth && birthDay) {
                                const birthDateStr = `${birthYear}-${birthMonth}-${birthDay}`;
                                const birthDate = new Date(birthDateStr + 'T12:00:00Z');
                                if (marriageDate < birthDate) {
                                    errors.push(`Marriage date cannot be before birth date.`);
                                    $('#marriage_year, #marriage_month, #marriage_day').addClass('border-red-500');
                                }

                                // Age at marriage check (at least 18)
                                const ageAtMarriage = marriageDate.getUTCFullYear() - birthDate.getUTCFullYear();
                                const monthDiff = marriageDate.getUTCMonth() - birthDate.getUTCMonth();
                                const dayDiff = marriageDate.getUTCDate() - birthDate.getUTCDate();
                                let adjustedAge = ageAtMarriage;
                                if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) adjustedAge--;
                                if (adjustedAge < 18) {
                                    errors.push(`Invalid marriage date (person would be under 18 years old at marriage).`);
                                    $('#marriage_year, #marriage_month, #marriage_day').addClass('border-red-500');
                                }
                            }

                            // Too far in the past check (optional, e.g., within last 100 years)
                            const minValidDate = new Date(today);
                            minValidDate.setUTCFullYear(today.getUTCFullYear() - 100);
                            if (marriageDate < minValidDate) {
                                errors.push(`Marriage date is too far in the past.`);
                                $('#marriage_year, #marriage_month, #marriage_day').addClass('border-red-500');
                            }
                        }
                    }
                } else {
                    // If not married, clear any previous red borders
                    $('#marriage_year, #marriage_month, #marriage_day').removeClass('border-red-500');
                }
            }

            // Marriage date required when married
            if (fieldName === 'marriagedate' && $('#civilstatus').val() === 'married') {
                if (!value) {
                    errors.push(`Marriage Date is required when Married is selected.`);
                    $field.addClass('border-red-500');
                }
            }
        });

        // Radio button validation for name_format (when married)
        if ($('#civilstatus').val() === 'married' && $('#marriagesection').is(':visible')) {
            const $nameFormatRadios = $('input[name="name_format"]:visible');
            if ($nameFormatRadios.length > 0 && !$('input[name="name_format"]:checked').length) {
                errors.push(`Please select a preferred name format.`);
                $nameFormatRadios.first().closest('.space-y-3').addClass('border-red-500');
            }
        }

        // Scholarship specify validation
        if ($('#scholarship').val() === 'yes') {
            const $specifyField = $('#specifyscholarship');
            if (!$specifyField.val() || $specifyField.val().trim() === '') {
                errors.push(`Please specify the scholarship details.`);
                $specifyField.addClass('border-red-500');
            }
        }

        // Funding sources validation (at least one checkbox checked)
        if (step === 7) {
            const $checkedCheckboxes = $step.find('input[name="funding_sources[]"]:checked');
            if ($checkedCheckboxes.length === 0) {
                errors.push(`Please select at least one funding source.`);
                
                // Remove any existing border highlights first
                $step.find('.funding-checkbox').closest('.space-y-3').removeClass('border-red-500 border rounded p-2');
                
                // Add border to a container that wraps both checkbox columns
                // Option 1: Add border to the parent grid container that holds both columns
                $step.find('.grid').first().addClass('border-red-500 border rounded p-4');
                
                // Option 2: If you want to highlight each column separately but both together,
                // uncomment the lines below instead of Option 1:
                // $step.find('.space-y-3').addClass('border-red-500 border rounded p-2');
            } else {
                // Remove borders when validation passes
                $step.find('.grid').first().removeClass('border-red-500 border rounded p-4');
                $step.find('.space-y-3').removeClass('border-red-500 border rounded p-2');
            }
            
            // Other funding source validation
            if ($('#funding-other').is(':checked')) {
                const $otherInput = $('#funding-other-input');
                if (!$otherInput.val() || $otherInput.val().trim() === '') {
                    errors.push(`Please specify the other funding source.`);
                    $otherInput.addClass('border-red-500');
                }
            }
        }
        

        // In validateStep(step) function, add this for step 7:
        if (step === 8) {
            // PWD Disability Types validation
            const pwdValue = $('#pwd').val();
            if (pwdValue === 'Yes') {
                const $checkedDisabilities = $('input[name="disability_types[]"]:checked');
                if ($checkedDisabilities.length === 0) {
                    errors.push(`Please select at least one type of disability.`);
                    // Highlight the disability types container
                    $('#pwd-types').addClass('border-red-500 border rounded p-2');
                } else {
                    $('#pwd-types').removeClass('border-red-500 border rounded p-2');
                }
            }

            // Support Needs validation
            const $checkedSupport = $('input[name="support_needs[]"]:checked');
            if ($checkedSupport.length === 0) {
                errors.push(`Please select at least one support need.`);
                // Highlight the support needs container
                $('.support-needs-container').addClass('border-red-500 border rounded p-2');
            } else {
                $('.support-needs-container').removeClass('border-red-500 border rounded p-2');
                
                // Check if "Other" is selected and verify specification
                if ($('#support-other').is(':checked')) {
                    const otherValue = $('#support-specify').val().trim();
                    if (!otherValue) {
                        errors.push(`Please specify your other support needs.`);
                        $('#support-specify').addClass('border-red-500');
                    } else {
                        $('#support-specify').removeClass('border-red-500');
                    }
                }
            }

            // IPRA validation for "Other" option
            if ($('#ipra').val() === 'yes' && $('#indigenous_group').val() === 'other') {
                const ipraSpecifyValue = $('#ipra_specify').val().trim();
                if (!ipraSpecifyValue) {
                    errors.push(`Please specify your indigenous group.`);
                    $('#ipra_specify').addClass('border-red-500');
                } else {
                    $('#ipra_specify').removeClass('border-red-500');
                }
            }
        }

        // ===== Step 9 validation (profile picture + documents) =====
        if (step === 9) {
            // Profile picture is already validated by the preview script, but we can still check if a file is selected.
            const profileFile = $('#imageInput')[0].files[0];
            if (!profileFile) {
                errors.push('Profile picture is required.');
                $('#imageInput').addClass('border-red-500');
            } else {
                $('#imageInput').removeClass('border-red-500');
            }

            // Required documents (always required)
            const docFields = [
                { name: 'medical_certificate', label: 'Medical Certificate' },
                { name: 'student_directory', label: 'Student Directory' },
                { name: 'notice_of_admission', label: 'Notice of Admission' },
                { name: 'honorable_dismissal', label: 'Honorable Dismissal' },
                { name: 'tor_remarks', label: 'TOR with Remarks' },
                { name: 'birth_certificate', label: 'Birth Certificate (PSA/LCR)' }
            ];

            docFields.forEach(field => {
                const fileInput = $(`input[name="${field.name}"]`)[0];
                if (!fileInput || !fileInput.files.length) {
                    errors.push(`${field.label} is required.`);
                    $(`input[name="${field.name}"]`).addClass('border-red-500');
                } else {
                    $(`input[name="${field.name}"]`).removeClass('border-red-500');
                }
            });

            // Conditional marriage certificate
            const civilStatus = $('#civilstatus').val();
            if (civilStatus === 'married') {
                const marriageInput = $('input[name="marriage_certificate"]')[0];
                if (!marriageInput || !marriageInput.files.length) {
                    errors.push('Marriage certificate is required because Civil Status is Married.');
                    $('input[name="marriage_certificate"]').addClass('border-red-500');
                } else {
                    $('input[name="marriage_certificate"]').removeClass('border-red-500');
                }
            }

            // ===== NEW: Conditional PWD card =====
            const pwdValue = $('#pwd').val();
            if (pwdValue === 'Yes') {
                const pwdCardInput = $('input[name="pwd_card_container"]')[0];
                if (!pwdCardInput || !pwdCardInput.files.length) {
                    errors.push('PWD Card is required because you identified as a Person With Disability.');
                    $('input[name="pwd_card_container"]').addClass('border-red-500');
                } else {
                    $('input[name="pwd_card_container"]').removeClass('border-red-500');
                }
            }
        }

        // Step 10 specific checkbox validation (now step 10 in original, but kept as step 10 in code)
        if (step === 10) {
            const confirmationChecked = $('#confirmation').is(':checked');
            const dataPrivacyChecked = $('#data-privacy').is(':checked');
            
            if (!confirmationChecked) {
                errors.push('You must confirm that the information is true and correct.');
                $('#confirmation').closest('.mb-6').addClass('border-red-500 border rounded p-2');
            }
            if (!dataPrivacyChecked) {
                errors.push('You must agree to the Data Privacy terms.');
                $('#data-privacy').closest('.mb-6').addClass('border-red-500 border rounded p-2');
            }
        }

        return errors;
    }

    // ---------- Event Handlers ----------

    // Remove red border on input change
    $(document).on('input change', '.step input, .step select, .step textarea', function() {
        $(this).removeClass('border-red-500');
        $(this).closest('.border-red-500').removeClass('border-red-500');
    });

    // Special handling for checkboxes to remove the grid border
    $(document).on('change', '.funding-checkbox', function() {
        const $step = $(this).closest('.step[data-step="6"]');
        const $checkedCheckboxes = $step.find('input[name="funding_sources[]"]:checked');
        
        if ($checkedCheckboxes.length > 0) {
            // Remove the red border from the grid container
            $step.find('.grid').first().removeClass('border-red-500 border rounded p-4');
            $step.find('.space-y-3').removeClass('border-red-500 border rounded p-2');
        }
    });

    // Trigger validation update when citizenship changes
    $(document).on('change', '#citizenship', function() {
        if (currentStep === 2) { // Assuming contact details is step 2
            validateStep(currentStep);
        }
    });

    // Trigger validation update when typeofincome changes
    $(document).on('change', '#typeofincome', function() {
        if (currentStep === 6) {
            validateStep(currentStep);
        }
    });

    // Agreement checkbox toggles Next button on step 1
    $(document).on('change', '#agreement', function() {
        if (currentStep === 1) {
            const isChecked = $(this).is(':checked');
            $('#nextBtn').prop('disabled', !isChecked);
            if (!isChecked) {
                $('#nextBtn').addClass('opacity-50 cursor-not-allowed');
            } else {
                $('#nextBtn').removeClass('opacity-50 cursor-not-allowed');
            }
        }
    });

    // Step 10 checkboxes toggle Submit button
    $(document).on('change', '#confirmation, #data-privacy', function() {
        if (currentStep === 10) {
            const bothChecked = $('#confirmation').is(':checked') && $('#data-privacy').is(':checked');
            $('#submitBtn').prop('disabled', !bothChecked);
            if (!bothChecked) {
                $('#submitBtn').addClass('opacity-50 cursor-not-allowed');
            } else {
                $('#submitBtn').removeClass('opacity-50 cursor-not-allowed');
            }
        }
    });

    // Next button click
    $('#nextBtn').click(function() {
        const currentIndex = visibleSteps.indexOf(currentStep);
        const errors = validateStep(currentStep);
        if (errors.length === 0) {
            if (currentIndex < totalSteps - 1) {
                currentStep = visibleSteps[currentIndex + 1];
                showStep(currentStep);
            }
        } else {
            errors.forEach(error => showToast(error, 'error'));
        }
    });

    // Previous button click
    $('#prevBtn').click(function() {
        const currentIndex = visibleSteps.indexOf(currentStep);
        if (currentIndex > 0) {
            currentStep = visibleSteps[currentIndex - 1];
            showStep(currentStep);
        }
    });

    // Step label click (progress bar)
    $('.step-label').click(function () {
        const targetStep = parseInt($(this).data('step'));
        if (!visibleSteps.includes(targetStep)) return; // ignore hidden steps

        const targetIndex = visibleSteps.indexOf(targetStep);
        const currentIndex = visibleSteps.indexOf(currentStep);

        if (targetIndex > currentIndex) {
            // Moving forward – validate the current step first
            const errors = validateStep(currentStep);
            if (errors.length > 0) {
                errors.forEach(error => showToast(error, 'error'));
                return;
            }
        }
        currentStep = targetStep;
        showStep(currentStep);
    });

    // Category change listener
    $('#category').on('change', function() {
        updateVisibleSteps();
    });

    // ---------- New: Validate button for UP Student Number ----------
    $('#validateBtn').click(function(e) {
        e.preventDefault(); // Prevent any unintended form submission
        const studentNumber = $('#student_number').val().trim();
        const studentNumberRegex = /^20\d{2}\d{4,5}$/; // Same as in validateStep

        if (!studentNumber) {
            showToast('Please enter a UP Student Number.', 'error');
        } else if (!studentNumberRegex.test(studentNumber)) {
            showToast('UP Student Number must be in the format 20xx-xxxx or 20xx-xxxxx.', 'error');
        } else {
            // Valid student number – show the UP email field
            $('#UP_email_container').removeClass('hidden');
            $('#validateBtn').prop('disabled', true).text('Validated');
            showToast('Student number validated. Please enter your UP email.', 'success');
        }
    });

    // If the student number is changed after validation, reset the state
    $('#student_number').on('input', function() {
        if (!$('#UP_email_container').hasClass('hidden')) {
            // Hide email again and re-enable validate button
            $('#UP_email_container').addClass('hidden');
            $('#validateBtn').prop('disabled', false).text('Validate');
            // Optionally clear the email field
            $('#UP_email').val('');
        }
    });

    // Listen for civil status changes to update marriage certificate field
    $(document).on('change', '#civilstatus', function() {
        // If current step is 8, update visibility immediately
        if (currentStep === 8) {
            toggleMarriageCertificate();
        }
        // Also, if current step is 9 (documents upload), we might want to update the marriage certificate field there,
        // but it will be updated when step 9 is shown again.
    });

    // Listen for PWD changes to update PWD card container when on step 9
    $(document).on('change', '#pwd', function() {
        if (currentStep === 9) {
            togglePWDContainer();
        }
    });

    // Initialize the form
    showStep(currentStep);
    updateVisibleSteps();   // sets initial visibility based on any pre-selected category

    // Add custom event listener for citizenship changes to update UI
    $(document).on('citizenshipChanged', function() {
        if (currentStep === 4) {
            validateStep(currentStep);
        }
    });
});