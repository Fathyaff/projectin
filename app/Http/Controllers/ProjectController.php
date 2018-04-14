<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Candidates;
use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display all resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $allProjects = Projects::get();
        return view('project_showall', [
            'projects' => $allProjects
        ]);
    }
    
    /**
     * Insert data into table candidates
     */
	public function chooseProject($id)
	{
		$candidates= new Candidates;
		$candidates->id_project = $id;
		$candidates->id_user = '25';
		$candidates->status = 'Applied';
		$candidates->save();
		dd(compact('candidates'));
		
		return redirect('/project/showall');
	}

    public function contactUs(Request $request)
    {
        $contact_us = new ContactUs;
		$contact_us->name = Input::get('name');
		$contact_us->email = Input::get('email');
		$contact_us->phone = Input::get('phone');
		$contact_us->message = Input::get('message');
        $contact_us->save();
        
        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
