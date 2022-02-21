<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherModule;
class TeacherControler extends Controller
{
    public function index()
    {
        return view('admin.teacher_module.index');
    }
    public function create()
    {
        return view('admin.teacher_module.create');
    }
    public function store(Request $request )
    {
        $module = new TeacherModule();
        $module-> name = $request -> name ;
        $module-> address = $request -> address ;
        $module-> number = $request -> number ;
        $module-> email = $request -> email ;
        $module-> gender = $request -> gender ;
        $module-> faculty = $request -> faculty ;
        $module-> module = $request ->  module;
        $module-> nationality = $request ->  nationality;
        $module->save();
        return redirect()->back();
      
    }
}
