<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DeshboardController extends Controller
{
    public function index(){
        $php_application = DB::table('applications')
            ->where('course_id',2)
            ->count();
        $design_application = DB::table('applications')
            ->where('course_id',1)
            ->count();
        $android_application = DB::table('applications')
            ->where('course_id',3)
            ->count();
    	return view('admin.admindeshboard',compact('php_application','design_application','android_application'));
    }
}
