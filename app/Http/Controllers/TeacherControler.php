<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
