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
}
