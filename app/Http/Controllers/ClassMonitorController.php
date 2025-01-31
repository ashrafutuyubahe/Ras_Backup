<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassMonitorController extends Controller
{
   public function index(){
    $presentCount = 32;
    $absentCount = null;
    $submittedReports = null;
    $increaseRate = null;

    return view('classmonitors.classmonitor', compact('presentCount', 'absentCount', 'submittedReports', 'increaseRate'));
   }
   public function CreateReport(){
    return view('classmonitors.report.create');
   }
   public function ReportHistory(){
    $reports = [
        ['no' => 1, 'class' => 'Y1', 'stream' => 'A', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
        ['no' => 2, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
        ['no' => 3, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
        ['no' => 4, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
        ['no' => 5, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
        ['no' => 6, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
        ['no' => 7, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],

];

    return view('classmonitors.report.history',compact('reports'));
   }
   public function manageClass(){

    return view('classmonitors.manageClass');
   }
   public function ClassmonitorSettings(){
    return view ('classmonitors.classmonitorSettings');
   }
   public function fetchStudentsForClassmonitor(){
    $students = [
        [ 'no'=> 1, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
        [ 'no'=> 2, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
        [ 'no'=> 3, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
        [ 'no'=> 4, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
        [ 'no'=> 5, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
        [ 'no'=> 6, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
        [ 'no'=> 7, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
        [ 'no'=> 8, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
        [ 'no'=> 9, 'first_name'=> 'Nziza', 'last_name'=> 'Prince', 'year'=> 'Y2', 'class'=> 'B', 'email'=> 'nzizaprince7@gmail.com' ],
    ];
return response()->json($students);
}



}
