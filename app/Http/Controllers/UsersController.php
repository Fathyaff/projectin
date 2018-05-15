<?php

namespace App\Http\Controllers;

use DB;
use App\Users;
use App\SeSkills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
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
    public function createEngineer(Request $request)
    {
        $join_us = new Users;
        $join_us->nama = Input::get('name');
        $join_us->email = Input::get('email');
        $join_us->univ = Input::get('univ');
        $join_us->role = 'Mahasiswa';
        $join_us->save();

        for ($i=0; $i < sizeof(Input::get('skills')); $i++) { 
            $userSkill = new SeSkills;
            $userSkill->id_users = $join_us->id;
            $userSkill->nama_skill = Input::get('skills')[$i];
            $userSkill->save();
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
        $engineers = Users::where('role', 'Mahasiswa')
                    ->join('se_skills', 'users.id', '=', 'se_skills.id_users')
                    ->select('users.nama', 'users.univ', 
                    DB::raw('(CASE WHEN count(se_skills.id_users) <= 3 THEN "Beginner" 
                        WHEN count(se_skills.id_users) <= 6 THEN "Average"
                        WHEN count(se_skills.id_users) > 6 THEN "Expert"
                        END) AS category'))
                    ->groupBy('se_skills.id_users')
                    ->get();
        $data = $engineers->where('category', '=', $param)->toArray();
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function skills()
    {
        $skills = SeSkills::select('nama_skill')->distinct()->get();
        return response()->json($skills);
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
