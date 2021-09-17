<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('home1');
    }
    public function indexc()
    {
        return view ('home2');
    }
    public function indexz()
    {
        return view ('welcome');
    }
    public function indexa()
    {
        return view ('registeradmin');
    }
}
