<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.landingpage');
    }

    public function adminDashboard()
    {
        return view('pages.admin.dashboard');
    }
}