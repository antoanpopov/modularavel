<?php

namespace Modules\Dashboard\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display the dashboard with its widgets
     * @return \Illuminate\View\View
     */
    public function index()
    {

       return view('pages.dashboard.index');
    }
}