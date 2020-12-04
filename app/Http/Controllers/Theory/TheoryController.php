<?php

namespace App\Http\Controllers\Theory;

use App\Http\Controllers\Controller;
use App\Squad;
use App\Theory;
use Illuminate\Http\Request;

class TheoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $squads = Squad::orderBy('name', 'ASC')->get();
        $theories = Theory::orderBy('date','ASC')->get();
        
        if($request->squad){
            $theories = Theory::orderBy('date','ASC')->where('squad_id', $request->squad)->get();
        }

        return view('pages.theory.index', compact('theories','squads'));
    }

    public function store(Request $request)
    {
        $rules = [
            'coordinator' => 'required',
            'meeting' => 'required',
            'date' => 'required',
            'squad_id' => 'required',
            'link' => 'required',
        ];

        $messages = [
            'required' => 'This field cannot be empty'
        ];


        $this->validate($request, $rules, $messages);

        Theory::create([
            'meeting' => $request->meeting,
            'date' => $request->date,
            'squad_id' => $request->squad_id,
            'coordinator' => $request->coordinator,
            'link' => $request->link
        ]);

        return redirect()->route('theory.index')->with('alert','Data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Theory  $theory
     * @return \Illuminate\Http\Response
     */
    public function show(Theory $theory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Theory  $theory
     * @return \Illuminate\Http\Response
     */
    public function edit($theory)
    {
        $theory = Theory::find($theory);
        
        return response()->json([
            'message' => 'succes',
            'status' => true,
            'theory' => $theory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Theory  $theory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $theory)
    {
        $theory = Theory::findOrFail($theory);
        $theory->update([
            'meeting' => $request->meeting,
            'date' => $request->date,
            'squad_id' => $request->squad_id,
            'coordinator' => $request->coordinator,
            'link' => $request->link
        ]);

        return redirect()->route('theory.index');
        // ->with('alert','Data changed successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Theory  $theory
     * @return \Illuminate\Http\Response
     */
    public function destroy($theory)
    {
        $theory = Theory::findOrFail($theory);
        $theory->delete();

        return redirect()->route('theory.index')->with('alert','Data deleted successfully');
    }

    public function getDataJson(){
        $theory = Theory::all();
        return response()->json([
            'message' => 'succes',
            'status' =>true,
            'theory' => $theory
        ]);
    }

    public function coba (){
        return view ('pages.theory.teori');
    }

    
}
