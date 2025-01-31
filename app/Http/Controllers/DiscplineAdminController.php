<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscplineAdminController extends Controller
{
    public function index(){
        return view('disciplineStaff.home');
    }
    public function manageClassmonitors(){
        $reports = [
            ['no' => 1, 'class' => 'Y1', 'stream' => 'A', 'Name' => 'Nziza Prince', 'Email' => 'nzizaprince7@gmail.com'],
            ['no' => 2, 'class' => 'Y2', 'stream' => 'B', 'Name' => 'Nziza Prince', 'Email' => 'nzizaprince7@gmail.com'],
            ['no' => 3, 'class' => 'Y2', 'stream' => 'B', 'Name' => 'Nziza Prince', 'Email' => 'nzizaprince7@gmail.com'],
            ['no' => 4, 'class' => 'Y2', 'stream' => 'B', 'Name' => 'Nziza Prince', 'Email' => 'nzizaprince7@gmail.com'],
            ['no' => 5, 'class' => 'Y2', 'stream' => 'B', 'Name' => 'Nziza Prince', 'Email' => 'nzizaprince7@gmail.com'],
            ['no' => 6, 'class' => 'Y2', 'stream' => 'B', 'Name' => 'Nziza Prince', 'Email' => 'nzizaprince7@gmail.com'],
            ['no' => 7, 'class' => 'Y2', 'stream' => 'B', 'Name' => 'Nziza Prince', 'Email' => 'nzizaprince7@gmail.com'],



        ];
        
        return view('disciplineStaff.manageClassmonitors', compact('reports'));
    }
    public function manageReports(){
                $reports = [
            ['no' => 1, 'class' => 'Y1', 'stream' => 'A', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
            ['no' => 2, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
            ['no' => 3, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
            ['no' => 4, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
            ['no' => 5, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
            ['no' => 6, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],
            ['no' => 7, 'class' => 'Y2', 'stream' => 'B', 'Report' => 'Y3A_Attendance_Report', 'Date' => '27/10/2024', 'Time'=>'06:00'],



        ];

        return view('disciplineStaff.manageReports',compact('reports'));

    }

    public function fetchStudentsForAdmin(){
            $students = [
                [ 'no'=> 1, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
                [ 'no'=> 2, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
                [ 'no'=> 3, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
                [ 'no'=> 4, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
                [ 'no'=> 5, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
                [ 'no'=> 6, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
                [ 'no'=> 7, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
                [ 'no'=> 8, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
                [ 'no'=> 9, 'first_name'=> 'IRASUBIZA', 'last_name'=> 'SALY Nelson', 'year'=> 'Y2', 'class'=> 'A', 'email'=> 'john@example.com' ],
            ];
        return response()->json($students);
    }

    public function manageClasses(){


        return view('disciplineStaff.manageClasses');
    }
    public function showSettings(){
        return view('disciplineStaff.adminSettings');
    }
}
