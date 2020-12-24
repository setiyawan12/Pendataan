<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index(){
        return view('pages.member.view_index');
    }

    public function getDataMember(){
        $members = Member::orderBy('name')->get();

        return response()->json([
            'message' => 'success',
            'status' => true,
            'data' => $members
        ]);

    }

    public function store(Request $request){
        $member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return response()->json([
            'message' => 'success',
            'status' => true,
            'data' => $member
        ]);
    }

    public function getDataEdit($id){
        $member = Member::findOrFail($id);

        return response()->json([
            'message' => 'success',
            'status' => true,
            'data' => $member
        ]);
    }

    public function update(Request $request, $id){
        $member = Member::findOrFail($id);
        $member->update([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return response()->json([
            'message' => 'success',
            'status' => true,
            'data' => $member
        ]);
    }

    public function destroy($id){
        $member = Member::findOrFail($id);
        $member->delete();

        return response()->json([
            'message' => 'success',
            'status' => true,
            'data' => 'Berhasil hapus'
        ]);
    }


}
