<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lecture;


class BaseController extends Controller
{
    //

    public function show_dashboard() 
    {
    	return view('admin.dashboard');
    }

    public function show_report() 
    {
    	return view('admin.report');
    }

    public static function pull_course(Request $request){


    }

    public static function pull_lecturer(Request $request){

    }

    public static function pull_student(Request $request){

    }

    public static function create_lecture(Request $r){

        $lecture = new Lecture();
        $lecture->course_id = $r->course_id;
        $lecture->lecturer_id = $r->course_id;
        $lecture->room_id = $r->course_id;
        $lecture->day = $r->day;
        $lecture->time = $r->time;
        $success = Lecture::create($lecture);
        if($success){
            echo 'insertion has been sucessful';
        }  else {
            echo 'there was problem inserting the elements';
        }
    }

}
