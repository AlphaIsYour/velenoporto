<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('components.dashboard.dashboard', [
            'title' => 'Dashboard',
            'projects'=> Project::all(),
            'user' => Auth::user(),
            'dashboards' => Dashboard::all()
        ]);
    }
    public function projects(){

        return view('components.dashboard.projects', [
            'title' => 'Projects',
            'projects'=> Project::all(),
        ]);
    }
}
