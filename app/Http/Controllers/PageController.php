<?php

namespace App\Http\Controllers;

use App\SeSkills;
use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    public function index()
    {
        return view('landing_page');
    }

    public function createProject()
    {
        return view('create_project');
    }

    public function joinEngineer()
    {
        $skills = SeSkills::select('nama_skill')->distinct()->get();
        return view('join_engineer', [
            'skills' => $skills
        ]);
    }

    public function sendFeedback(Request $request)
    {
        $contact_us = new ContactUs;
		$contact_us->name = Input::get('name');
		$contact_us->email = Input::get('email');
		$contact_us->phone = Input::get('phone');
		$contact_us->message = Input::get('message');
        $contact_us->save();
        
        return redirect('/');
    }
}
