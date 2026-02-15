<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.index');
    }

    public function addSubject()
    {
        return view('backend.add-subject');
    }

    public function userList()
    {
        return view('backend.users');
    }

    public function userProfile()
    {
        return view('backend.profile');
    }

    public function addTopics()
    {
        return view('backend.add-topics');
    }
}
