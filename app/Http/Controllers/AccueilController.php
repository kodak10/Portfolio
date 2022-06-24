<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Competence;
use App\Models\CompetenceLangage;
use App\Models\Education;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontEnd.master');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $banner = banner::get();
        $about = about::get();
        $competence = competence::orderby('title', 'desc')->get();

        $langage = CompetenceLangage::get();
        // $competenceLangage = CompetenceLangage::orderBy('libCompetenceLangage','asc')->get(); 
        // $competenceLangage = CompetenceLangage::where()->get();
       
        $langage = Competence::where([Competence::get('id') , CompetenceLangage::get('competences_id')]);

        return view ('frontEnd.master', compact(
                                            'banner', 
                                            'about',
                                            'competence',
                                            'langage',
                                        ));
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
