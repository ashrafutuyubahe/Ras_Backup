@extends('disciplineStaff.layout')
@section('content')
<div class="px-10 font-[nunito]">
    {{-- The profile section --}}
    <div class="flex justify-between mt-10">
        <div class="flex gap-5">
            <img width="70px" class="rounded-full object-cover" src="{{ asset('assets/chief.png') }}" alt="Patron image">
            <div class="flex flex-col gap-4">
                <h1 class="font-bold text-xl">Patron</h1>
                <p class="font-light text-gray-500 text-xl">patron@gmail.com</p>
            </div>
        </div>
        <button class="bg-[#0C5E38] w-[185px] h-[52px] rounded-lg text-[#FFFFFF] font-semibold">Edit profile</button>
    </div>
    {{-- End profile section --}}

    {{-- Language preferences section --}}
    <div class="mr-10 mt-20 flex justify-between">
        <div class="mb-4">
            <h1 class="font-semibold mt-3">Language Preferences</h1>
            <select name="language" id="language" class="w-[357px] h-[48px] bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700 text-sm p-2">
                <option value="English">English</option>
                <option value="Kinyarwanda">Kinyarwanda</option>
            </select>
        </div>
        {{-- Theme settings section --}}
        <div class="mt-8">
            <div class="font-semibold mb-4">
                <h1>Theme</h1>
            </div>
            <div class="flex gap-6">
                <div class="flex items-center gap-2">
                    <input type="radio" id="dark" name="theme" value="dark" class="cursor-pointer">
                    <label for="dark" class="text-gray-700">Dark</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="radio" id="light" name="theme" value="light" class="cursor-pointer">
                    <label for="light" class="text-gray-700">Light</label>
                </div>
            </div>
        </div>
        {{-- End theme settings section --}}
    </div>
    {{-- End language preferences section --}}


    {{-- Time settings section --}}
    <div class="mt-8">
        <div class="font-semibold mb-10">
            <h1 class="text-lg">Time Settings</h1>
            <p class="tetx-lg text-gray-500">Customize report submission time</p>
        </div>
        <div class="flex justify-between gap-8 mb-10">
            <div class="flex gap-3 justify-cetext-gray-500nter">
                <label for="start" class="block font-medium text-lg mt-5 text-gray-700">Start:</label>
                <select id="start" name="start" class="w-[357px] h-[62px] bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700 text-sm p-2">
                    <option>06:00</option>
                    <option>07:00</option>
                    <option>08:00</option>
                </select>
            </div>
            <div class="flex gap-3">
                <label for="end" class="block text-lg mt-5 font-medium text-gray-700">End:</label>
                <select id="end" name="end" class="w-[357px] h-[62px] bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700 text-sm p-2">
                    <option>07:00</option>
                    <option>08:00</option>
                    <option>09:00</option>
                </select>
            </div>
        </div>
        <button class="mt-4 font-semibold bg-[#16254C] text-white px-6 py-2 rounded-lg">Apply Changes</button>
    </div>
    {{-- End time settings section --}}

    {{-- Notification settings section --}}
    <div class="mt-10 ">
        <div class="font-semibold mb-5">
            <h1 class="text-gray-900 text-lg">Notification Settings</h1>
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" id="notifications" name="notifications" class="cursor-pointer scale-110">
            <label for="notifications" class="text-gray-500">Turn on report submission notifications</label>
        </div>
    </div>
    {{-- End notification settings section --}}
</div>
@endsection
