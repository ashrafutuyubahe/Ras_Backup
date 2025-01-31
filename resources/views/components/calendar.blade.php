
                        {{-- Calendar --}}
                        @php
                            $currentDate = now(); // Get the current date
                            $month = $currentDate->format('F'); // Full month name
                            $year = $currentDate->year; // Year
                            $daysInMonth = $currentDate->daysInMonth; // Number of days in the month
                            $startOfMonth = $currentDate->copy()->startOfMonth()->dayOfWeek; // Day of the week the month starts
                            $today = $currentDate->day; // Today's date
                        @endphp

                        <div class="flex flex-col text-sm items-center border rounded-md p-5 bg-white shadow-md w-96 max-w-md mt-20">
                            <!-- Header -->
                            <div class="flex justify-between items-center w-full mb-4">
                                <span class="text-lg font-bold">{{ $month }}</span>
                                <span class="text-lg text-gray-600">{{ $year }}</span>
                            </div>
                            <!-- Days of the Week -->
                            <div class="grid grid-cols-7 gap-2 w-full text-center text-gray-700">
                                <span class="font-medium">Sun</span>
                                <span class="font-medium">Mon</span>
                                <span class="font-medium">Tue</span>
                                <span class="font-medium">Wed</span>
                                <span class="font-medium">Thu</span>
                                <span class="font-medium">Fri</span>
                                <span class="font-medium">Sat</span>
                            </div>
                            <!-- Calendar Days -->
                            <div class="grid grid-cols-7 gap-2 w-full text-sm font-semibold text-center mt-2">
                                @for ($i = 0; $i < $startOfMonth; $i++)
                                    <div class="text-gray-400"></div>
                                    <!-- Empty slots for days before the first day of the month -->
                                @endfor
                                @for ($day = 1; $day <= $daysInMonth; $day++)
                                    <div
                                        class="py-2
                                            {{ $day == $today ? 'bg-[#198754] text-white font-bold rounded-full' : 'text-gray-700' }}">
                                        {{ $day }}
                                    </div>
                                @endfor
                                {{-- Calendar --}}
