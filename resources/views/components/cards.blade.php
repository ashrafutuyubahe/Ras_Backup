                        {{-- Cards --}}
                        <div class="flex gap-12 h-64">
                            <!-- first car -->
                            <div
                                class="bg-[#DDDCED] mt-10 relative py-10 border-[3px] border-[#4A42AF] rounded-md w-[250px] pl-6 pr-4">
                                <div class="absolute left-2 bottom-5 top-5 w-[5px] rounded-lg bg-[#4A42AF]"></div>
                                <h1 class="text-[#4154F1] font-semibold flex">Present <span class="text-[#95b3c7]"> |
                                        Today</span></h1>
                                <div class="flex mt-4 gap-10">
                                    <div>
                                        <img src="{{ asset('assets/card1.svg') }}" class="h-20 w-20 rounded-full "
                                            alt="my image">
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-violet text-3xl text-[#4154F1] font-semibold">{{ $presentCount ?? 0 }}</h1>
                                        <div class="flex gap-1">
                                            <p class="font-bold text-[#198754] text-sm  ">{{ $increaseRate?? 0 }}%</p>
                                            <p class="bg-[#9CDCCB] px-2 text-sm rounded-full text-[#6b747e]">increase
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- first car -->
                            {{-- Second Card --}}
                            <div
                                class="bg-[#C0F0DA] mt-10 relative py-10 border-[3px] border-[#4A42AF] rounded-md w-[250px] pl-6 pr-4">
                                <div class="absolute left-2 bottom-5 top-5 w-[5px] rounded-lg bg-[#1DA767]"></div>
                                <h1 class="text-[#4154F1] font-semibold flex">Absent <span class="text-[#95b3c7]"> |
                                        Today</span></h1>
                                <div class="flex mt-4 gap-10">
                                    <div>
                                        <img src="{{ asset('assets/card2.svg') }}" class="h-20 w-20 rounded-full "
                                            alt="my image">
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-violet text-3xl text-[#4154F1] font-semibold">{{ $absentCount ?? 0 }}</h1>
                                        <div class="flex gap-1">
                                            <p class="font-bold text-[#f10000] text-sm  ">{{ $increaseRate ?? 0 }}%</p>
                                            <p class="bg-[#F7ECEC] px-2 text-sm rounded-full text-[#c4bec2]">increase
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Second Card --}}
                            {{-- Third Card --}}
                            <div
                                class="bg-[#EFDFEA] mt-10 relative py-10 border-[3px] border-[#4A42AF] rounded-md w-[250px] pl-6 pr-4">
                                <div class="absolute left-2 bottom-5 top-5 w-[5px] rounded-lg bg-[#7695CB]"></div>
                                <h1 class="text-[#4154F1] font-seminbold flex">{{ $lastHeading }}<span
                                        class="text-[#95b3c7]"> | Today</span></h1>
                                <div class="flex mt-4 gap-10">
                                    <div>
                                        <img src="{{ asset('assets/card3.svg') }}"
                                            class="object-cover h-20 w-20 rounded-full " alt="my image">
                                    </div>
                                    <div class="mt-4">
                                        <h1 class="text-violet text-3xl text-[#4154F1] font-semibold">{{ $submittedReports ?? 0 }}</h1>
                                        <div class="flex gap-1">
                                            <p class="font-bold text-[#83902d] text-sm  ">{{ $increaseRate?? 0 }}%</p>
                                            <p class="bg-[#eff6cf] px-2 text-sm rounded-full text-[#838e8d]">increase
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Third Card --}}
                        </div>
                        {{-- Cards --}}
