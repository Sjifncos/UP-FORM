<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind · Vanilla Date Picker (with month/year selects)</title>
    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .datepicker-calendar {
            transition: opacity 0.15s ease, transform 0.1s ease;
            transform-origin: top center;
        }
        .datepicker-hidden {
            opacity: 0;
            pointer-events: none;
            transform: scaleY(0.95);
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="w-full max-w-sm" id="datepicker-demo">
        <label class="block text-sm font-medium text-gray-700 mb-1">Pick a date</label>
        <div class="relative" id="datepicker-container">
            <!-- input field (readonly, triggers calendar) -->
            <input type="text" id="datepicker-input" readonly
                   class="w-full cursor-pointer rounded-lg border border-gray-300 bg-white py-2.5 px-4 pr-10 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                   placeholder="dd / mm / yyyy">

            <!-- calendar icon -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>

            <!-- calendar panel -->
            <div id="calendar-panel"
                 class="datepicker-calendar datepicker-hidden absolute left-0 right-0 mt-2 bg-white rounded-xl shadow-xl border border-gray-200 p-4 z-10 transition-all duration-150 sm:left-auto sm:w-80 mx-auto">

                <!-- header with month & year dropdowns + navigation arrows -->
                <div class="flex items-center justify-between gap-1 mb-4">
                    <!-- month select -->
                    <select id="month-select" class="block w-28 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-400 focus:ring-blue-300 bg-white py-1.5 px-2"></select>
                    <!-- year select -->
                    <select id="year-select" class="block w-20 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-400 focus:ring-blue-300 bg-white py-1.5 px-2"></select>

                    <div class="flex gap-1">
                        <button id="prev-month" class="w-8 h-8 rounded-full hover:bg-gray-100 flex items-center justify-center text-gray-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button id="next-month" class="w-8 h-8 rounded-full hover:bg-gray-100 flex items-center justify-center text-gray-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- day labels -->
                <div class="grid grid-cols-7 gap-1 text-center text-xs font-medium text-gray-500 mb-2">
                    <div>Su</div><div>Mo</div><div>Tu</div><div>We</div><div>Th</div><div>Fr</div><div>Sa</div>
                </div>

                <!-- days grid -->
                <div id="days-grid" class="grid grid-cols-7 gap-1 text-sm"></div>

                <!-- today button -->
                <div class="mt-3 text-right">
                    <button id="today-button" class="text-xs text-[#850038] hover:text-[#850038] font-medium px-2 py-1 rounded hover:bg-blue-50 transition-colors">
                        Today
                    </button>
                </div>
            </div>
        </div>
        <p class="text-xs text-gray-500 mt-2">Month & year dropdowns · click outside to close</p>
    </div>

    <script>
        (function() {
            // DOM elements
            const container = document.getElementById('datepicker-container');
            const inputEl = document.getElementById('datepicker-input');
            const calendarPanel = document.getElementById('calendar-panel');
            const monthSelect = document.getElementById('month-select');
            const yearSelect = document.getElementById('year-select');
            const daysGrid = document.getElementById('days-grid');
            const prevBtn = document.getElementById('prev-month');
            const nextBtn = document.getElementById('next-month');
            const todayBtn = document.getElementById('today-button');

            // state
            let currentDate = new Date();
            currentDate.setDate(1);                 // always first of month for navigation
            let selectedDate = null;

            // ----- populate month dropdown (Jan - Dec) -----
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            monthNames.forEach((name, index) => {
                const option = document.createElement('option');
                option.value = index;
                option.textContent = name;
                monthSelect.appendChild(option);
            });

            const currentYear = new Date().getFullYear();
                for (let y = 1970; y <= currentYear; y++) {
                    const option = document.createElement('option');
                    option.value = y;
                    option.textContent = y;
                    yearSelect.appendChild(option);
                }

            // helper: format date for display
            function formatDisplay(date) {
                if (!date) return '';
                const d = String(date.getDate()).padStart(2, '0');
                const m = String(date.getMonth() + 1).padStart(2, '0');
                const y = date.getFullYear();
                return `${d} / ${m} / ${y}`;
            }

            // sync dropdowns with currentDate
            function syncSelectsFromDate() {
                monthSelect.value = currentDate.getMonth();
                yearSelect.value = currentDate.getFullYear();
            }

            // render calendar based on currentDate
            function renderCalendar() {
                const year = currentDate.getFullYear();
                const month = currentDate.getMonth();

                // update selects to match
                syncSelectsFromDate();

                // first day of month (0 = Sunday)
                const firstDay = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const prevMonthDays = new Date(year, month, 0).getDate(); // days in previous month

                // build 42 cells (6 rows)
                let cells = [];
                for (let i = 0; i < 42; i++) {
                    let cellDay, cellMonth, cellYear, isCurrentMonth;

                    if (i < firstDay) {
                        // previous month
                        cellDay = prevMonthDays - firstDay + i + 1;
                        cellMonth = month - 1;
                        cellYear = month === 0 ? year - 1 : year;
                        isCurrentMonth = false;
                    } else if (i < firstDay + daysInMonth) {
                        // current month
                        cellDay = i - firstDay + 1;
                        cellMonth = month;
                        cellYear = year;
                        isCurrentMonth = true;
                    } else {
                        // next month
                        cellDay = i - (firstDay + daysInMonth) + 1;
                        cellMonth = month + 1;
                        cellYear = month === 11 ? year + 1 : year;
                        isCurrentMonth = false;
                    }

                    const cellDate = new Date(cellYear, cellMonth, cellDay);

                    // selected?
                    const isSelected = selectedDate &&
                        cellDate.getFullYear() === selectedDate.getFullYear() &&
                        cellDate.getMonth() === selectedDate.getMonth() &&
                        cellDate.getDate() === selectedDate.getDate();

                    // today?
                    const today = new Date();
                    const isToday = cellDate.getFullYear() === today.getFullYear() &&
                                    cellDate.getMonth() === today.getMonth() &&
                                    cellDate.getDate() === today.getDate();

                    // base classes
                    let classNames = 'h-9 w-full rounded-md flex items-center justify-center transition-colors cursor-pointer ';

                    if (!isCurrentMonth) {
                        classNames += 'text-gray-300 hover:bg-gray-100 ';
                    } else {
                        classNames += 'text-gray-800 hover:bg-blue-100 ';
                    }

                    if (isSelected) {
                        classNames = 'h-9 w-full rounded-md flex items-center justify-center transition-colors cursor-pointer bg-blue-600 text-white hover:bg-blue-700 font-medium';
                    } else if (isToday && isCurrentMonth && !isSelected) {
                        classNames += 'border border-blue-400 bg-blue-50';
                    }

                    cells.push(`<div class="${classNames}" data-year="${cellYear}" data-month="${cellMonth}" data-day="${cellDay}" data-month-current="${isCurrentMonth}">${cellDay}</div>`);
                }

                daysGrid.innerHTML = cells.join('');
            }

            // update input and close calendar
            function selectDate(date) {
                selectedDate = date;
                inputEl.value = date ? formatDisplay(date) : '';
                hideCalendar();
                renderCalendar(); // refresh highlight
            }

            function showCalendar() {
                calendarPanel.classList.remove('datepicker-hidden');
                renderCalendar();
            }

            function hideCalendar() {
                calendarPanel.classList.add('datepicker-hidden');
            }

            function toggleCalendar() {
                if (calendarPanel.classList.contains('datepicker-hidden')) {
                    showCalendar();
                } else {
                    hideCalendar();
                }
            }

            // month/year change handlers
            function onMonthChange() {
                const newMonth = parseInt(monthSelect.value, 10);
                const newYear = parseInt(yearSelect.value, 10);
                currentDate = new Date(newYear, newMonth, 1);
                renderCalendar();
            }

            function onYearChange() {
                const newMonth = parseInt(monthSelect.value, 10); // preserve month
                const newYear = parseInt(yearSelect.value, 10);
                currentDate = new Date(newYear, newMonth, 1);
                renderCalendar();
            }

            // prev/next navigation
            function previousMonth() {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar();
            }

            function nextMonth() {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar();
            }

            // today button: set view to current month (without auto‑select)
            function goToToday() {
                const today = new Date();
                currentDate = new Date(today.getFullYear(), today.getMonth(), 1);
                renderCalendar();
            }

            // ----- event binding -----
            inputEl.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleCalendar();
            });

            // day click delegation
            daysGrid.addEventListener('click', (e) => {
                const dayDiv = e.target.closest('[data-year]');
                if (!dayDiv) return;

                const year = parseInt(dayDiv.dataset.year, 10);
                const month = parseInt(dayDiv.dataset.month, 10);
                const day = parseInt(dayDiv.dataset.day, 10);
                const isCurrentMonth = dayDiv.dataset.monthCurrent === 'true';

                const chosenDate = new Date(year, month, day);

                // If the chosen day belongs to a different month, we update the view to that month
                if (!isCurrentMonth) {
                    currentDate = new Date(year, month, 1);
                }

                selectDate(chosenDate);
                // renderCalendar called inside selectDate, but we need to ensure view is correct
                // selectDate calls hideCalendar and renderCalendar, but we changed currentDate before selectDate,
                // so renderCalendar will reflect the new month.
            });

            monthSelect.addEventListener('change', onMonthChange);
            yearSelect.addEventListener('change', onYearChange);

            prevBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                previousMonth();
            });

            nextBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                nextMonth();
            });

            todayBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                goToToday();
            });

            // outside click to close
            document.addEventListener('mousedown', (e) => {
                if (!container.contains(e.target)) {
                    hideCalendar();
                }
            });

            // prevent closing when interacting inside calendar panel
            calendarPanel.addEventListener('mousedown', (e) => e.stopPropagation());

            // escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !calendarPanel.classList.contains('datepicker-hidden')) {
                    hideCalendar();
                }
            });

            // initial render (calendar hidden)
            renderCalendar();
        })();
    </script>
</body>
</html>