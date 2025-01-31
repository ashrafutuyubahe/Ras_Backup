@extends('classmonitors.layout')

@section('content')
<div class="mx-20 font-[nunito]" x-data="{ showModal: false }"> <!-- Ensure Alpine.js is loaded -->
    <div class="flex justify-between">
        <div>
            <h2 class="font-[nunito] font-semibold text-[24px] leading-[28.8px] text-[#4154F1]">
                Dashboard</h2>
            <h1 class="text-[#989797] font-semibold text-sm">Report / <span class="text-[#444444]">Dashboard</span></h1>
        </div>
        <button
            @click="showModal = true"
            class="bg-[#0C5E38] text-white px-10 rounded-md py-1 font-bold">
            Generate report
        </button>
    </div>

    <div class="mt-5">
        <p class="text-[#444444]">List of all students</p>
        @php
            $headers = ['No', 'Class', 'Stream', 'Name', 'Email', 'Action'];
            $students = [
                ['no' => 1, 'class' => 'Y1', 'stream' => 'A', 'name' => 'Nziza Prince', 'email' => 'nzizapince7@gmail.com'],
                ['no' => 2, 'class' => 'Y1', 'stream' => 'B', 'name' => 'Nziza Prince', 'email' => 'nzizaprince7@gmail.com'],
                ['no' => 3, 'class' => 'Y1', 'stream' => 'C', 'name' => 'Nziza Prince', 'email' => 'nzizaprince7@gmail.com'],
            ];
        @endphp

        <x-table :headers="$headers" :rows="$students" />
    </div>

    <!-- Modal -->
    <div x-show="showModal" class="transition-transform fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;"> <!-- Add style for debugging -->
        <div class="bg-white rounded-lg shadow-lg w-[400px] p-6">
            <div>
                <img class="md:ml-32 mb-5" src="{{ asset('assets/modal.svg') }}" alt=""></div>
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-[#F15A59]">Confirm your report submission</h3>
                <button @click="showModal = false" class="text-gray-500 text-2xl hover:text-black">&times;</button>
            </div>
            <div class="mt-4 text-center">
                <p>Are you sure you want to submit this report?</p>
            </div>
            <div class="flex justify-around mt-6">
                <button @click="showModal = false" class="px-6 py-2 bg-[#F15A59] text-white font-bold rounded-md hover:bg-red-700">
                    Confirm
                </button>
                <button @click="showModal = false" class="px-6 py-2 bg-[#0C5E38] text-white font-bold rounded-md hover:bg-green-700">
                    View PDF
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
