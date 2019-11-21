<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ApplicationController extends Controller
{
    public function phpApplication()
    {
        return view('admin.applications.php_application');
    }

    public function androidApplication()
    {
        return view('admin.applications.android_app');
    }
    public function webdesignApplication()
    {
        return view('admin.applications.web_design');
    }

    public function phpApplicationAjax()
    {
        $php_application = DB::table('applications')->where('course_id',2)->where('admission_status',1);

        return datatables()->of($php_application->get())
        ->addIndexColumn()
        ->addColumn('payment_status', function($row){
            if ($row->payment_status == '1') {

               $btn = '<a href="#" class="btn btn-warning btn-sm">Not Paid</a>';
                return $btn;
            }else{

               $btn = '<a href="#" class="btn btn-success btn-sm">Paid</a>';
                return $btn;
            }
        })
        ->rawColumns(['payment_status'])
        ->make(true);
    }

    public function webdesignApplicationAjax()
    {
        $php_application = DB::table('applications')->where('course_id',1)->where('admission_status',1);

        return datatables()->of($php_application->get())
        ->addIndexColumn()
        ->addColumn('payment_status', function($row){
            if ($row->payment_status == '1') {

               $btn = '<a href="#" class="btn btn-warning btn-sm">Not Paid</a>';
                return $btn;
            }else{

               $btn = '<a href="#" class="btn btn-success btn-sm">Paid</a>';
                return $btn;
            }
        })
        ->rawColumns(['payment_status'])
        ->make(true);
    }

    public function androidApplicationAjax()
    {
        $php_application = DB::table('applications')->where('course_id',3)->where('admission_status',1);

        return datatables()->of($php_application->get())
        ->addIndexColumn()
        ->addColumn('payment_status', function($row){
            if ($row->payment_status == '1') {

               $btn = '<a href="#" class="btn btn-warning btn-sm">Not Paid</a>';
                return $btn;
            }else{

               $btn = '<a href="#" class="btn btn-success btn-sm">Paid</a>';
                return $btn;
            }
        })
        ->rawColumns(['payment_status'])
        ->make(true);
    }
}
