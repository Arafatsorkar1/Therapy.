<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.user.pages.dashboard.dashboard');
    }

    public function traning()
    {
        return view('backend.user.pages.traning.traning');
    }

    public function assessment()
    {
        return view('backend.user.pages.assessment.assessment');
    }
}
