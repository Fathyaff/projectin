<?php

namespace App\Http\Controllers;

use App\Projects;
use App\ListFitur;
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
    public function createProject(Request $request)
    {
        $project = new Projects;
        $project->id_po ="1"; // Hardcode
        $project->nama = Input::get('projectName');
        $project->min_harga = Input::get('minHarga');
        $project->max_harga = Input::get('maxHarga');
        if ($project->min_harga < "10000000") {
            $project->jenis = "Small";
        } elseif ($project->min_harga < "20000000") {
            $project->jenis = "Medium";
        } else {
            $project->jenis = "Big";
        }
        $project->duration = Input::get('duration');
        $project->desain = (Input::get('design')) ? 1 : 0 ;
        $project->deskripsi = Input::get('deskripsi');
        $project->save();

        for ($i=0; $i < sizeof(Input::get('features')); $i++) { 
            $fitur = new ListFitur;
            $fitur->id_project = $project->id;
            $fitur->nama_fitur = Input::get('features')[$i];
            $fitur->save();
        }

        return redirect('/#portfolio');
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
    public function showall($param)
    {
        $projects = Projects::where('jenis', $param)->get();
        return response()->json($projects);
    }
    
    // public function chooseProject($id)
	// {
	// 	$candidates= new Candidates;
	// 	$candidates->id_project = $id;
	// 	$candidates->id_user = '25';
	// 	$candidates->status = 'Applied';
	// 	$candidates->save();
	// 	dd(compact('candidates'));
		
	// 	return redirect('/project/showall');
    // }
    
    public function chooseProject(Request $request)
	{
        $projectSelected = Projects::where('jenis', Input::get('jenis'))->get();

        $candidate = new Candidates;
        $candidate->id_project = $projectSelected[(int) Input::get('index')]->id;
        $candidate->id_user = Input::get('user');
        $candidate->status = 'Applied';
        $saved = $candidate->save();

        $result = array('result' => $saved);
        return response()->json($result);
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
