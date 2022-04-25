<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors = Professor::all();
        return view('professor',['professors'=>$professors,'layout'=>'index']);
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
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professeur)
    {
        $professor = Professor::find($professeur);
        $professors = Professor::all();
        return view('professor',['professors'=>$professors,'professor' => $professor,'layout'=>'show']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professeur)
    {
        $professor = Professor::find($professeur);
        $professor->prenom = $request->input('prenom');
        $professor->nom = $request->input('nom');
        $professor->email = $request->input('email');
        $professor->tel = $request->input('tel');
        $professor->matricule = $request->input('matricule');
        $professor->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professeur)
    {
        $professor = Professor::find($professeur);
        $professor->delete();
        return redirect('/');
    }
}
