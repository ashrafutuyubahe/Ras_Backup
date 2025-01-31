@extends('classmonitors.layout')
@section('content')
<div class="px-10 py-6 mx-auto">
    <div>
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-semibold text-2xl text-blue-600">Dashboard</h2>
                <h1 class="text-gray-500">Classes / Dashboard</h1>
                <p class="text-lg mt-3">Classes</p>
            </div>
        </div>
    </div>

    <!-- Dropdown Section -->
    <div class="flex justify-between items-center space-x-8">
        <!-- Year Dropdown -->
        <div class="flex items-center space-x-3">
            <h1 class="text-lg font-medium text-gray-700">Year:</h1>
            <select name="Year" id="Year"
                class="w-[357px] h-[48px] bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700 text-sm p-2">
                <option value="Year1">Year 1</option>
                <option value="Year2">Year 2</option>
                <option value="Year3">Year 3</option>
            </select>
        </div>

        <!-- Stream Dropdown -->
        <div class="flex items-center space-x-3">
            <h1 class="text-lg font-medium text-gray-700">Stream:</h1>
            <select name="stream" id="stream"
                class="w-[357px] h-[48px] bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700 text-sm p-2">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>
    </div>
    <x-classmonitor-student-table/>
</div>
@endsection
