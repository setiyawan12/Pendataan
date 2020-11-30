<?php

namespace App\Http\Controllers\Squad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Squad;

class SquadController extends Controller
{
    public function index(){
        $squads = Squad::orderBy('name', 'ASC')->get();
        return view('pages.squad.index', compact('squads'));
    }

    public function store(Request $request){
        $rules = [
            'name' => 'required'
        ];

        $messages = [
            'required' => 'This field cannot be empty.'
        ];

        $this->validate($request, $rules, $messages);

        if($request->id == null){
            Squad::create([
                'name' => $request->name
            ]);
            return redirect()->route('squad.index')->with('alert','Data added successfully');
        }else{
            $squad = Squad::findOrFail($request->id);
            $squad->update([
                'name' => $request->name
            ]);

            return redirect()->route('squad.index')->with('alert','Data changed successfully');
        }
    }

    public function destroy($squad){
        $squad = Squad::findOrFail($squad);
        $squad->delete();

        return redirect()->route('squad.index')->with('alert','Data deleted successfully');
    }
}
