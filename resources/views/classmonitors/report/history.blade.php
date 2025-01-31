<!-- resources/views/classmonitors/report/create.blade.php -->
@extends('classmonitors.layout')

@section('content')

<div class="mx-10">
    <div class="mb-5">
        <h2 class="font-semibold text-2xl text-blue-600">Dashboard</h2>
        <h1 class="text-gray-500">Reports/ Dashboard</h1>
        <p class="text-lg mt-5 mb-5">Submitted reports</p>
    </div>
    <!-- Student Table -->
    <div x-data="{ showAll: false }" class="relative overflow-x-auto border rounded-lg shadow-md bg-white">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Class</th>
                    <th scope="col" class="px-6 py-3">Stream</th>
                    <th scope="col" class="px-6 py-3">Report</th>
                    <th scope="col" class="px-6 py-3">Date</th>
                    <th scope="col" class="px-6 py-3">Time</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $index => $report)
                <tr x-show="showAll || {{ $index }} < 5" class="bg-white border-b">
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['no'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['class'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['stream'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600 flex gap-5 cursor-pointer"><img width="25px" height="10px" src="{{ asset('assets/documentIcon.svg') }}" alt="">{{ $report['Report'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['Date'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['Time'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">
                        <div class="relative inline-block text-left" x-data="{ showDropdown: false }">
                            <button @click="showDropdown = !showDropdown" class="inline-flex items-center justify-center w-8 h-8 text-gray-500 hover:text-black focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                                </svg>
                            </button>
                            <div x-show="showDropdown" @click.away="showDropdown = false" class="absolute right-0 mt-2 w-28 bg-white border rounded-md shadow-lg z-50">
                                <ul class="py-1 text-sm text-gray-700">
                                    <li>
                                        <button @click="modalContent = {{ json_encode($report) }}; showModal = true" class="text-left w-full block px-4 py-2 hover:bg-gray-300 hover:font-semibold">View</button>
                                    </li>
                                    <li>
                                        <button @click="modalContent = {{ json_encode($report) }}; showModal = true" class="text-left w-full block px-4 py-2 hover:bg-gray-300 hover:font-semibold">Delete</button>
                                    </li>
                               </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Show More Button -->
        <div class="text-right mt-4 mr-4 cursor-pointer">
            <p @click="showAll = !showAll" class="text-blue-500 font-bold px-4 py-2 rounded-lg">
                <span x-text="showAll ? 'Show Less' : 'Show More'"></span>
            </p>
        </div>
    </div>
</div>

@endsection
