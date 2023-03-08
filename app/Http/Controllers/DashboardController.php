<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('student')){
            return view('userDashboard');
        }elseif(Auth::user()->hasRole('instructor')){
            return view('instructorDashboard');
        }elseif(Auth::user()->hasRole('admin')){
            return view('dashboard');
        }
    }

    public function myprofile(){
        return view('myprofile');
    }

    public function createroom(){
        // $student = Role::all();
        // $student = User::all();
        // $student = User::Roles('Student')->get();
        $student = User::whereHas(
        'roles', function($q){
        $q->where('name', 'Student');
        }
        )->get();
        return view('createroom', compact('student'));
    }

    function joinroom(Request $request, $id){
        return view('joinroom', compact('id'));
    }
}
