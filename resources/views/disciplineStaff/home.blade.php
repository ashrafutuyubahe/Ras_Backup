@extends('disciplineStaff.layout')

@section('content')
  <!-- Page Content -->
  <div class="container mx-auto p-6">
    <div>
        <div class="flex justify-between">
            <div>
                <h2 class="font-[nunito] font-semibold text-[24px] leading-[28.8px] text-[#4154F1]">
                    Dashboard</h2>
                <h1>Home / <span>Dashboard</span></h1>
            </div>
            {{-- Time --}}
        </div>

        <div class="flex justify-between h-auto mb-10">
            {{-- Cards --}}
        @php
            $presentCount = 145;  // Example present count
            $absentCount = 20;    // Example absent count
            $increaseRate = 12;
            $submittedReports = 145;
            $lastHeading = "Total Attendance"   // Example increase rate
        @endphp
       <x-cards :presentCount="$presentCount" :absentCount="$absentCount" :increaseRate="$increaseRate" :submittedReports="$submittedReports" :lastHeading="$lastHeading"/>

            {{-- Cards --}}
            <x-calendar/>
                </div>
                {{-- Calendar and Cards div --}}
            </div>
        </div>
     </div>

    {{-- table --}}
    @php
    $headers = ['No', 'Class', 'Stream', 'Name', 'Email', 'Action'];
    $students = [
        ['no' => 1, 'class' => '12A', 'stream' => 'Science', 'name' => 'John Doe', 'email' => 'john@example.com'],
        ['no' => 2, 'class' => '12B', 'stream' => 'Arts', 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
        ['no' => 3, 'class' => '11A', 'stream' => 'Commerce', 'name' => 'Michael Johnson', 'email' => 'michael@example.com'],
    ];
    @endphp

<x-table :headers="$headers" :rows="$students" />

    {{-- Table --}}
</div>
{{-- Page Content --}}

@endsection

