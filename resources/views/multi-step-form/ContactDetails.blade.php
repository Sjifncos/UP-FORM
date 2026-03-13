<div class="step" data-step="4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        <div class="col-span-1 md:col-span-2">
            <h1 class="text-[24px] font-semibold text-[#850038]">
                Address Information
            </h1>
        </div>
        <div class="relative w-full">
            <label for="citizenship" class="font-medium">Are you a Philippine citizen?<span class="text-red-500 ml-1">*</span></label>
            <select id="citizenship" name="citizenship" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
            focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option disabled selected>Please Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="relative w-full">
            <label for="citizenship_country" class="font-medium">Country of Citizenship <span class="text-red-500 ml-1">*</span></label>
            <select id="citizenship_country" name="citizenship_country" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none 
            focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option value="" disabled selected>Please Select</option>
            </select>
        </div>

        <!-- Heading for Permanent Address Outside the Philippines (added ID) -->
        <div id="outside_ph_heading" class="col-span-1 md:col-span-2">
            <h1 class="text-[18px] font-semibold text-[#850038] text-center">Permanent Address Outside the Philippines</h1>
        </div>
        <div class="relative w-full">
            <label for="outside_ph_addressline1" class="font-medium">
                Address in Home Country 
            </label>
            <input required id="outside_ph_addressline1" name="outside_ph_addressline1" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="outside_ph_addressline2" class="font-medium">
                Street Address Line 2
            </label>
            <input required id="outside_ph_addressline2" name="outside_ph_addressline2" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>

        <div class="relative w-full">
            <label for="city_foreign" class="font-medium">
                City
            </label>
            <input required id="city_foreign" name="city_foreign" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>

        <div class="relative w-full">
            <label for="state/province_foreign" class="font-medium">
                State/Province
            </label>
            <input required id="state/province_foreign" name="state/province_foreign" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="zipcode_foreign" class="font-medium">
                Postal/Zip Code
            </label>
            <input required id="zipcode_foreign" name="zipcode_foreign" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        {{--
        <div class="relative w-full">
            <label for="outside_ph_addressline1" class="font-medium">
                Address in Home Country
            </label>
            <input required id="outside_ph_addressline1" name="outside_ph_addressline1" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="outside_ph_addressline2" class="font-medium">
                Street Address Line 2
            </label>
            <input required id="outside_ph_addressline2" name="outside_ph_addressline2" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="city_foreign" class="font-medium">
                City
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="city_foreign" name="city_foreign" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="state/province_foreign" class="font-medium">
                State/Province
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="state/province_foreign" name="state/province_foreign" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="zipcode_foreign" class="font-medium">
                Postal/Zip Code
                <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="zipcode_foreign" name="zipcode_foreign" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        --}}


        {{--
        <div class="relative w-full">
            <div class="relative w-full">
                <input required id="outside_ph_addressline1" name="outside_ph_addressline1" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="outside_ph_addressline1" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Address in Home Country <span class="text-red-500 ml-1">*</span>
                </label>
            </div>
            <p class="text-[12px] text-gray-500 mt-1">Street Address</p>
        </div>
        <div class="relative w-full">
            <div class="relative w-full">
                <input required id="outside_ph_addressline2" name="outside_ph_addressline2" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="outside_ph_addressline2" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Street Address Line 2
                </label>
            </div>
        </div>
        <div class="relative w-full">
            <input required id="city_foreign" name="city_foreign" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="city_foreign" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                City<span class="text-red-500 ml-1">*</span>
            </label>
        </div>
        <div class="relative w-full">
            <input required id="state/province_foreign" name="state/province_foreign" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="state/province_foreign" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                State/Province<span class="text-red-500 ml-1">*</span>
            </label>
        </div>
        <div class="relative w-full mt-8">
            <div class="relative w-full">
                <input required id="zipcode_foreign" name="zipcode_foreign" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="zipcode_foreign" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Postal/Zip Code<span class="text-red-500 ml-1">*</span>
                </label>
            </div>
            <span class="error-message text-red-500 text-sm hidden" data-for="zipcode_foreign"></span>
        </div>
        --}}

        <div class="relative w-full">
            <label for="foreign_country" class="font-medium">Country<span class="text-red-500 ml-1">*</span></label>
            <select id="foreign_country" name="foreign_country" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none 
            focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option disabled selected>Please Select</option>
            </select>
        </div>

        <div class="relative w-full">
           <div class="relative w-full">
                <label for="same_address" class="font-medium">
                    Is your Permanent Address the same as your Current Address?
                    <span class="text-red-500 ml-1">*</span>
                </label>
                <select id="same_address" name="same_address" required 
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none 
                focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
                appearance-none">
                    <option disabled selected>Please Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>

        <!-- Address inside the Philippines (unchanged) -->
        <div class="col-span-1 md:col-span-2">
            <h1 class="text-[18px] font-semibold text-[#850038] text-center">Permanent Address Inside the Philippines</h1>
        </div>
        {{--
        <div class="md:col-span-1 flex flex-col w-full">
            <label for="streetaddressline1_ph" class="font-medium">
                Street Address (Line 1) <span class="text-red-500 ml-1">*</span> 
                <br> <span class="text-[#850038] font-semibold">DO NOT INCLUDE BARANGAY, CITY, PROVINCE OR REGION</span> 
            </label>
            </label>
            <input required id="streetaddressline1_ph" name="streetaddressline1_ph" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">House/Building Number and Street Name (e.g., 123 Rizal Street)</p>
            <span class="error-message text-red-500 text-sm hidden" data-for="streetaddressline1_ph"></span>
        </div>
        <div class="md:col-span-1 flex flex-col w-full">
            <label for="streetaddressline2_ph" class="font-medium">
                Street Address (Line 2) <br> <span class="text-[#850038] font-semibold">DO NOT INCLUDE BARANGAY, CITY, PROVINCE OR REGION</span> 
            </label>
            <input required id="streetaddressline2_ph" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">Subdivision/Village, Building Name, Floor, or Unit (leave blank if none)</p>
            <span class="error-message text-red-500 text-sm hidden" data-for="streetaddressline2_ph"></span>
        </div>
        --}}
        
        <div class="relative w-full">
            <label for="room_flr_unit_bldg" class="font-medium">
                Room/ Flr / Unit / Buidling 
            </label>
            <input required id="room_flr_unit_bldg" name="room_flr_unit_bldg" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="house_lot_blk" class="font-medium">
                House / Lot / Blk 
            </label>
            <input required id="house_lot_blk" name="house_lot_blk" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>

        <div class="relative w-full">
            <label for="street" class="font-medium">
                Street 
            </label>
            <input required id="street" name="street" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>

        <div class="relative w-full">
            <label for="subdivision_line2" class="font-medium">
                Subdivision / Line 2 
            </label>
            <input required id="subdivision_line2" name="subdivision_line2" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        
        <!-- Region -->
        <div class="relative w-full">
            <label for="region" class="font-medium">Region<span class="text-red-500 ml-1">*</span></label>
            <select id="region" name="region" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
            focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option value="" disabled selected>Loading regions...</option>
            </select>
        </div>
        <!-- Province -->
        <div class="relative w-full">
            <label for="province" class="font-medium">Province<span class="text-red-500 ml-1">*</span></label>
            <select id="province" name="province" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
            focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option value="" disabled selected>Please Select</option>
            </select>
        </div>
        <!-- City/Municipality -->
        <div class="relative w-full">
            <label for="city" class="font-medium">City/Municipality<span class="text-red-500 ml-1">*</span></label>
            <select id="city" name="city" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
            focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option value="" disabled selected>Please Select</option>
            </select>
        </div>
        <!-- Barangay -->
        <div class="relative w-full">
            <label for="barangay" class="font-medium">Barangay<span class="text-red-500 ml-1">*</span></label>
            <select id="barangay" name="barangay" required 
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md 
            focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2
            appearance-none">
                <option value="" disabled selected>Please Select</option>
            </select>
        </div>
        <div class="relative w-full hidden">
            <label for="PSGC" class="font-medium">PSGC Code</label>
            <input required id="PSGC" type="text" disabled
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">This field will be automatically filled</p>
        </div>
        <!-- Current Address Inside the Philippines (hidden by default) -->
        <div id="current_address_section" class="col-span-1 md:col-span-2" style="display: none;">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4 w-full">
                <div class="col-span-1 md:col-span-2">
                    <h1 class="text-[18px] font-semibold text-[#850038] text-center">Current Address Inside the Philippines</h1>
                </div>

                <!-- Room/Flr/Unit/Building -->
                <div class="relative w-full">
                    <label for="current_room_flr_unit_bldg" class="font-medium">Room/ Flr / Unit / Buidling</label>
                    <input id="current_room_flr_unit_bldg" name="current_room_flr_unit_bldg" type="text"
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>

                <!-- House/Lot/Blk -->
                <div class="relative w-full">
                    <label for="current_house_lot_blk" class="font-medium">House / Lot / Blk</label>
                    <input id="current_house_lot_blk" name="current_house_lot_blk" type="text"
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>

                <!-- Street -->
                <div class="relative w-full">
                    <label for="current_street" class="font-medium">Street</label>
                    <input id="current_street" name="current_street" type="text"
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>

                <!-- Subdivision / Line 2 -->
                <div class="relative w-full">
                    <label for="current_subdivision_line2" class="font-medium">Subdivision / Line 2</label>
                    <input id="current_subdivision_line2" name="current_subdivision_line2" type="text"
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>

                <!-- Region -->
                <div class="relative w-full">
                    <label for="current_region" class="font-medium">Region<span class="text-red-500 ml-1">*</span></label>
                    <select id="current_region" name="current_region" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2 appearance-none">
                        <option value="" disabled selected>Loading regions...</option>
                    </select>
                </div>

                <!-- Province -->
                <div class="relative w-full">
                    <label for="current_province" class="font-medium">Province<span class="text-red-500 ml-1">*</span></label>
                    <select id="current_province" name="current_province" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2 appearance-none">
                        <option value="" disabled selected>Please Select</option>
                    </select>
                </div>

                <!-- City/Municipality -->
                <div class="relative w-full">
                    <label for="current_city" class="font-medium">City/Municipality<span class="text-red-500 ml-1">*</span></label>
                    <select id="current_city" name="current_city" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2 appearance-none">
                        <option value="" disabled selected>Please Select</option>
                    </select>
                </div>

                <!-- Barangay -->
                <div class="relative w-full">
                    <label for="current_barangay" class="font-medium">Barangay<span class="text-red-500 ml-1">*</span></label>
                    <select id="current_barangay" name="current_barangay" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2 appearance-none">
                        <option value="" disabled selected>Please Select</option>
                    </select>
                </div>

                <!-- PSGC (hidden) -->
                <div class="relative w-full hidden">
                    <label for="current_PSGC" class="font-medium">PSGC Code</label>
                    <input id="current_PSGC" type="text" disabled
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                    <p class="text-[12px] text-gray-500 mt-1">This field will be automatically filled</p>
                </div>
            </div>
        </div>
        {{--
        <div class="col-span-1 md:col-span-2">
            <h1 class="text-[18px] font-semibold text-[#850038] text-center">Contact Details</h1>
        </div>
        <div class="md:col-span-1 flex flex-col w-full">
            <label for="personalemail" class="font-medium">
                Personal E-mail <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="personalemail" name="personalemail" type="text" 
                placeholder="ex: myname@example.com"
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">Please enter your personal (non-UP) email address</p>
            <span class="error-message text-red-500 text-sm hidden" data-for="personalemail"></span>
        </div>
        <div class="md:col-span-1 flex flex-col w-full">
            <label for="mobilenumber" class="font-medium">
                Mobile Number <span class="text-red-500 ml-1">*</span>
            </label>
            <input required id="mobilenumber" name="mobilenumber" type="text" 
                placeholder="0000 000 0000"
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">ex. 0912 345 6789</p>
            <span class="error-message text-red-500 text-sm hidden" data-for="mobilenumber"></span>
        </div>
        <div class="md:col-span-1 flex flex-col w-full">
            <label for="landlinenumber" class="font-medium">Landline Number</label>
            <input required id="landlinenumber" type="text" 
                placeholder="(032) 000 0000"
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
            <p class="text-[12px] text-gray-500 mt-1">ex. (032) 345 6789</p>
        </div>
        --}}
        {{--

                 <!-- Instructions Accordion (unchanged) -->
            <div class="col-span-1 md:col-span-2 accordion">
    <details class="bg-white rounded-lg shadow-sm border border-gray-200">
        <summary class="font-medium text-[#850038] px-4 py-3 cursor-pointer list-none flex justify-between items-center">
            <span>
                <h1 class="text-[18px] font-semibold text-[#850038]">
                    Father's Information
                </h1>
            </span>
            <svg fill="#850038" width="24px" height="24px" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-chevron-circle-down-f">
                <path d='M10 11.828L6.464 8.293A1 1 0 0 0 5.05 9.707l4.243 4.243a.997.997 0 0 0 1.414 0l4.243-4.243a1 1 0 1 0-1.414-1.414L10 11.828zM10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10z' />
            </svg>
        </summary>
        <div class="col-span-1 md:col-span-2">
            <!-- Two‑column grid for the input fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
                <div class="relative w-full">
                    <label for="fathers_firstname" class="font-medium">
                        First Name
                        <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input required id="fathers_firstname" name="fathers_firstname" type="text" 
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>
                <div class="relative w-full">
                    <label for="fathers_middlename" class="font-medium">
                        Middle Name
                    </label>
                    <input required id="fathers_middlename" name="fathers_middlename" type="text" 
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>
                <div class="relative w-full">
                    <label for="fathers_lastname" class="font-medium">
                        Last Name
                        <span class="text-red-500 ml-1">*</span>
                    </label>
                    <input required id="fathers_lastname" name="fathers_lastname" type="text" 
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>
                <div class="relative w-full">
                    <label for="fathers_phonenumber" class="font-medium">
                        Phone Number
                    </label>
                    <input required id="fathers_phonenumber" name="fathers_phonenumber" type="text" 
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>
                <!-- Email spans both columns on medium screens and up -->
                <div class="relative w-full md:col-span-2">
                    <label for="fathers_email" class="font-medium">
                        E-mail
                    </label>
                    <input required id="fathers_email" name="fathers_email" type="text" 
                        class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                </div>
            </div>
        </div>
    </details>
</div>

        <div class="col-span-1 md:col-span-2 accordion">
            <details class="bg-white rounded-lg shadow-sm border border-gray-200">
                <summary class="font-medium text-[#850038] px-4 py-3 cursor-pointer list-none flex justify-between items-center">
                    <span>
                        <h1 class="text-[18px] font-semibold text-[#850038]">
                            Mother's Information
                        </h1>
                    </span>
                    <svg fill="#850038" width="24px" height="24px" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-chevron-circle-down-f">
                        <path d='M10 11.828L6.464 8.293A1 1 0 0 0 5.05 9.707l4.243 4.243a.997.997 0 0 0 1.414 0l4.243-4.243a1 1 0 1 0-1.414-1.414L10 11.828zM10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10z' />
                    </svg>
                </summary>
                <div class="col-span-1 md:col-span-2">
                    <!-- Two‑column grid for the input fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
                        <div class="relative w-full">
                            <label for="mothers_firstname" class="font-medium">
                                First Name
                                <span class="text-red-500 ml-1">*</span>
                            </label>
                            <input required id="mothers_firstname" name="mothers_firstname" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                        <div class="relative w-full">
                            <label for="mothers_middlename" class="font-medium">
                                Middle Name
                            </label>
                            <input required id="mothers_middlename" name="mothers_middlename" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                        <div class="relative w-full">
                            <label for="mothers_lastname" class="font-medium">
                                Last Name
                                <span class="text-red-500 ml-1">*</span>
                            </label>
                            <input required id="mothers_lastname" name="mothers_lastname" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                        <div class="relative w-full">
                            <label for="mothers_phonenumber" class="font-medium">
                                Phone Number
                            </label>
                            <input required id="mothers_phonenumber" name="mothers_phonenumber" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                        <!-- Email spans both columns on medium screens and up -->
                        <div class="relative w-full md:col-span-2">
                            <label for="mothers_email" class="font-medium">
                                E-mail
                            </label>
                            <input required id="mothers_email" name="mothers_email" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                    </div>
                </div>
            </details>
        </div>
        <div class="col-span-1 md:col-span-2 accordion">
            <details class="bg-white rounded-lg shadow-sm border border-gray-200">
                <summary class="font-medium text-[#850038] px-4 py-3 cursor-pointer list-none flex justify-between items-center">
                    <span>
                        <h1 class="text-[18px] font-semibold text-[#850038]">
                            Guardian's Information (Optional)
                        </h1>
                    </span>
                    <svg fill="#850038" width="24px" height="24px" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-chevron-circle-down-f">
                        <path d='M10 11.828L6.464 8.293A1 1 0 0 0 5.05 9.707l4.243 4.243a.997.997 0 0 0 1.414 0l4.243-4.243a1 1 0 1 0-1.414-1.414L10 11.828zM10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10z' />
                    </svg>
                </summary>
                <div class="col-span-1 md:col-span-2">
                    <!-- Two‑column grid for the input fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
                        <div class="relative w-full">
                            <label for="guardians_firstname" class="font-medium">
                                First Name
                                <span class="text-red-500 ml-1">*</span>
                            </label>
                            <input required id="guardians_firstname" name="guardians_firstname" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                        <div class="relative w-full">
                            <label for="guardians_middlename" class="font-medium">
                                Middle Name
                            </label>
                            <input required id="guardians_middlename" name="guardians_middlename" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                        <div class="relative w-full">
                            <label for="guardians_lastname" class="font-medium">
                                Last Name
                                <span class="text-red-500 ml-1">*</span>
                            </label>
                            <input required id="guardians_lastname" name="guardians_lastname" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                        <div class="relative w-full">
                            <label for="guardians_phonenumber" class="font-medium">
                                Phone Number
                            </label>
                            <input required id="guardians_phonenumber" name="guardians_phonenumber" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                        <!-- Email spans both columns on medium screens and up -->
                        <div class="relative w-full md:col-span-2">
                            <label for="guardians_email" class="font-medium">
                                E-mail
                            </label>
                            <input required id="guardians_email" name="guardians_email" type="text" 
                                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
                        </div>
                    </div>
                </div>
            </details>
        </div>
        {{--

        <div class="col-span-1 md:col-span-2">
            <h1 class="text-[18px] font-semibold text-[#850038]">Father's Information</h1>
        </div>

        <div class="relative w-full">
            <label for="fathers_firstname" class="font-medium">
                First Name
            </label>
            <input required id="fathers_firstname" name="fathers_firstname" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        
        <div class="relative w-full">
            <label for="fathers_middlename" class="font-medium">
                Middle Name
            </label>
            <input required id="fathers_middlename" name="fathers_middlename" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="fathers_lastname" class="font-medium">
                Last Name
            </label>
            <input required id="fathers_lastname" name="fathers_lastname" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="fathers_phonenumber" class="font-medium">
                Phone Number
            </label>
            <input required id="fathers_phonenumber" name="fathers_phonenumber" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="fathers_email" class="font-medium">
                E-mail
            </label>
            <input required id="fathers_email" name="fathers_email" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>

        <div class="col-span-1 md:col-span-2">
            <h1 class="text-[18px] font-semibold text-[#850038]">Mother's Information</h1>
        </div>

        <div class="relative w-full">
            <label for="mother_firstname" class="font-medium">
                First Name
            </label>
            <input required id="mother_firstname" name="mother_firstname" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        
        <div class="relative w-full">
            <label for="mother_middlename" class="font-medium">
                Middle Name
            </label>
            <input required id="mother_middlename" name="mother_middlename" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="mother_lastname" class="font-medium">
                Last Name
            </label>
            <input required id="mother_lastname" name="mother_lastname" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="mother_phonenumber" class="font-medium">
                Phone Number
            </label>
            <input required id="mother_phonenumber" name="mother_phonenumber" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="mother_email" class="font-medium">
                E-mail
            </label>
            <input required id="mother_email" name="mother_email" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>

        <div class="col-span-1 md:col-span-2">
            <h1 class="text-[18px] font-semibold text-[#850038]">Guardian's Information (Optional)</h1>
        </div>

        <div class="relative w-full">
            <label for="guardian_firstname" class="font-medium">
                First Name
            </label>
            <input required id="guardian_firstname" name="guardian_firstname" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        
        <div class="relative w-full">
            <label for="guardian_middlename" class="font-medium">
                Middle Name
            </label>
            <input required id="guardian_middlename" name="guardian_middlename" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="guardian_lastname" class="font-medium">
                Last Name
            </label>
            <input required id="guardian_lastname" name="guardian_lastname" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="guardian_phonenumber" class="font-medium">
                Phone Number
            </label>
            <input required id="guardian_phonenumber" name="guardian_phonenumber" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        <div class="relative w-full">
            <label for="guardian_email" class="font-medium">
                E-mail
            </label>
            <input required id="guardian_email" name="guardian_email" type="text" 
                class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>
        --}}


    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // --- Existing country population ---
    async function populateCountries(selectId) {
        const select = document.getElementById(selectId);
        try {
            const response = await fetch('/api/countries');
            if (!response.ok) throw new Error('Network response was not ok');
            const countries = await response.json();

            countries.forEach(country => {
                const option = document.createElement('option');
                option.value = country.code;
                option.textContent = country.name;
                select.appendChild(option);
            });
        } catch (error) {
            console.error('Error fetching countries:', error);
        }
    }
    populateCountries('citizenship_country');
    populateCountries('foreign_country');

    // --- Existing PSGC logic ---
    const regionSelect = document.getElementById('region');
    const provinceSelect = document.getElementById('province');
    const citySelect = document.getElementById('city');
    const barangaySelect = document.getElementById('barangay');
    const psgcInput = document.getElementById('PSGC');

    const BASE_URL = "https://psgc.cloud/api";

    function resetDropdown(select, placeholder = "Please Select") {
        select.innerHTML = `<option value="" disabled selected>${placeholder}</option>`;
    }

    async function fetchData(url) {
        const response = await fetch(url);
        if (!response.ok) throw new Error("Failed to fetch");
        return await response.json();
    }

    function populateDropdown(select, data) {
        data.forEach(item => {
            const option = document.createElement("option");
            option.value = item.code;
            option.textContent = item.name;
            select.appendChild(option);
        });
    }

    async function loadRegions() {
        resetDropdown(regionSelect, "Loading regions...");
        const regions = await fetchData(`${BASE_URL}/regions`);
        resetDropdown(regionSelect);
        populateDropdown(regionSelect, regions);
    }

    regionSelect.addEventListener("change", async function () {
        resetDropdown(provinceSelect);
        resetDropdown(citySelect);
        resetDropdown(barangaySelect);
        psgcInput.value = "";

        const provinces = await fetchData(`${BASE_URL}/regions/${this.value}/provinces`);
        populateDropdown(provinceSelect, provinces);
    });

    provinceSelect.addEventListener("change", async function () {
        resetDropdown(citySelect);
        resetDropdown(barangaySelect);
        psgcInput.value = "";

        const cities = await fetchData(`${BASE_URL}/provinces/${this.value}/cities-municipalities`);
        populateDropdown(citySelect, cities);
    });

    citySelect.addEventListener("change", async function () {
        resetDropdown(barangaySelect);
        psgcInput.value = "";

        const barangays = await fetchData(`${BASE_URL}/cities-municipalities/${this.value}/barangays`);
        populateDropdown(barangaySelect, barangays);
    });

    barangaySelect.addEventListener("change", function () {
        psgcInput.value = this.value;
    });

    loadRegions();

    //CURRENT


    // --- Toggle foreign fields based on citizenship ---
    const citizenshipSelect = document.getElementById('citizenship');
    if (citizenshipSelect) {
        function toggleForeignFields() {
            // Show foreign fields only if "No" (non‑Philippine citizen) is selected
            const showForeign = citizenshipSelect.value === 'no';

            // List of field IDs to hide/show (all foreign address fields + citizenship country)
            const fieldIds = [
                'citizenship_country',
                'outside_ph_addressline1',
                'outside_ph_addressline2',
                'city_foreign',
                'state/province_foreign',
                'zipcode_foreign',
                'foreign_country'
            ];

            fieldIds.forEach(id => {
                const element = document.getElementById(id);
                if (!element) return;

                // Find the container div that wraps the label and input/select
                const container = element.closest('.relative.w-full');
                if (container) {
                    if (showForeign) {
                        container.style.display = '';
                        element.disabled = false;
                        element.required = true;      // restore required
                    } else {
                        container.style.display = 'none';
                        element.disabled = true;      // prevent submission
                        element.required = false;     // remove validation
                    }
                } else {
                    console.warn('Container not found for', id);
                }
            });

            // Handle the heading separately
            const heading = document.getElementById('outside_ph_heading');
            if (heading) {
                heading.style.display = showForeign ? '' : 'none';
            }
        }

        // Run on change and on page load (initial hide)
        citizenshipSelect.addEventListener('change', toggleForeignFields);
        toggleForeignFields();
    }

    // --- Toggle Current Address section based on "same as current address" selection ---
    const sameAddressSelect = document.getElementById('same_address');
    const currentAddressSection = document.getElementById('current_address_section');

    if (sameAddressSelect && currentAddressSection) {
        function toggleCurrentAddress() {
            // Show only when "No" is selected
            if (sameAddressSelect.value === 'no') {
                currentAddressSection.style.display = '';
            } else {
                currentAddressSection.style.display = 'none';
            }
        }

        sameAddressSelect.addEventListener('change', toggleCurrentAddress);
        toggleCurrentAddress(); // Apply initial state (hidden)
    }
});


    /*
    // --- Toggle foreign fields and heading based on citizenship ---
    const citizenshipSelect = document.getElementById('citizenship');
    if (citizenshipSelect) {
        function toggleForeignFields() {
            const isPhilippineCitizen = citizenshipSelect.value === 'yes';

            // List of field IDs to hide/show (excluding the heading, handled separately)
            const fieldIds = [
                'citizenship_country',
                'outside_ph_addressline1',
                'outside_ph_addressline2',
                'city_foreign',
                'state/province_foreign',
                'zipcode_foreign',
                'foreign_country'
            ];

            fieldIds.forEach(id => {
                const element = document.getElementById(id);
                if (!element) return;

                // Find the container div that wraps the label and input/select
                let container;
                if (id === 'outside_ph_addressline1' || id === 'outside_ph_addressline2') {
                    // These inputs are inside an inner .relative.w-full; the outer div contains the hint
                    container = element.closest('.relative.w-full').parentElement;
                } else if (id === 'zipcode_foreign') {
                    // zipcode_foreign has an outer div with mt-8 that also contains an error span
                    container = element.closest('.relative.w-full').parentElement;
                } else {
                    // All others: the input/select is directly inside the container div
                    container = element.closest('.relative.w-full');
                }

                if (container) {
                    if (isPhilippineCitizen) {
                        container.style.display = 'none';
                        element.disabled = true;      // disable to prevent submission
                        element.required = false;     // remove required to avoid validation
                    } else {
                        container.style.display = '';
                        element.disabled = false;
                        element.required = true;      // restore required
                    }
                } else {
                    console.warn('Container not found for', id);
                }
            });

            // Handle the heading separately
            const heading = document.getElementById('outside_ph_heading');
            if (heading) {
                heading.style.display = isPhilippineCitizen ? 'none' : '';
            }
        }

        // Run on change and on page load
        citizenshipSelect.addEventListener('change', toggleForeignFields);
        toggleForeignFields();
    }
});
*/
</script>