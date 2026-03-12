<div class="step hidden" data-step="2">
    <div class="step-content">
        <div class="col-span-1 md:col-span-2">
                <h1 class="text-[24px] font-semibold text-[#850038]">
                    Access Verification
                </h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div class="relative w-full">
                        <label for="student_number" class="font-medium">
                            UP Student Number (20xxxxxxx)
                            <span class="text-red-500 ml-1">*</span>
                        </label>
                        <input required id="student_number" name="student_number" type="text"
                            class="peer w-full px-4 py-3 text-base bg-white outline-none 
                                border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                    </div>
                    
                    <div class="relative w-full">
                        <label for="category" class="font-medium">
                            Category
                            <span class="text-red-500 ml-1">*</span>
                        </label>
                        <select id="category" name="category" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
                            focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2 appearance-none">
                            <option value="" disabled selected>Please Select</option>
                            <option value="graduate">Graduate</option>
                            <option value="undergraduate">Undergraduate</option>
                        </select>
                    </div>
                    <div class="relative w-full">
                        <button
                            id="validateBtn"
                            class="w-full sm:w-auto px-8 py-3 bg-[#850038] text-white font-semibold rounded 
                                hover:bg-[#FFAD0D] transition-colors duration-200">
                            Validate
                        </button>
                    </div>

                    {{--
                    <div class="relative w-full">
                        <input
                             name="student_number"
                             id="student_number"
                             required
                             type="text"
                            class="peer w-full px-4 py-3 text-base sm:text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors"/>
                        <label
                            for="student_number"
                            class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1
                                text-sm sm:text-sm text-gray-500 pointer-events-none
                                transition-all duration-150
                                peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021]
                                peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                            UP Student Number (20xxxxxxx)
                            <span class="text-red-500 ml-1">*</span>
                        </label>
                    </div>
                    --}}
                    {{--
                    <div class="relative w-full">
                        <input
                             name="UPM"
                             id="UPM"
                             required
                             type="text"
                            class="peer w-full px-4 py-3 text-base sm:text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors"/>
                        <label
                            for="UPM"
                            class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1
                                text-sm sm:text-sm text-gray-500 pointer-events-none
                                transition-all duration-150
                                peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021]
                                peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                            UPM
                            <span class="text-red-500 ml-1">*</span>
                        </label>
                    </div>
                    --}}
                    {{--
                    <div class="relative w-full">
                        <div class="relative w-full">
                        <input
                             name="category"
                             id="category"
                             required
                             type="text"
                            class="peer w-full px-4 py-3 text-base sm:text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors"/>
                        <label
                            for="category"
                            class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1
                                text-sm sm:text-sm text-gray-500 pointer-events-none
                                transition-all duration-150
                                peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021]
                                peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                            Category
                            <span class="text-red-500 ml-1">*</span>
                        </label>
                        </div>
                    </div>
                    --}}
                    {{-- UP Email field initially hidden --}}
                    <div class="relative w-full hidden" id="UP_email_container">
                        <label for="UP_email" class="font-medium">
                            UP E-mail
                        </label>
                        <input required id="UP_email" name="UP_email" type="text"
                            class="peer w-full px-4 py-3 text-base bg-white outline-none 
                                border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        <p class="text-[12px] text-gray-500 mt-1">UPid@up.edu.ph</p>     
                    </div>
                    {{--
                    <div class="relative w-full">
                        <div class="relative w-full">
                            <input
                             name="UP_email"
                             id="UP_email"
                             required
                             type="text"
                            class="peer w-full px-4 py-3 text-base sm:text-base bg-white outline-none
                                border-2 border-gray-300 rounded-md
                                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                                transition-colors"/>
                        <label
                            for="UP_email"
                            class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1
                                text-sm sm:text-sm text-gray-500 pointer-events-none
                                transition-all duration-150
                                peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021]
                                peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                                UP E-mail
                            
                        </label>
                        </div>
                        <p class="text-[12px] text-gray-500 mt-1">UPid@up.edu.ph</p>
                    </div>
                    --}}
            </div>
        </div>
    </div>
</div>
