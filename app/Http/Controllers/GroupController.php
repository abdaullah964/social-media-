<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function index(){
$groups=Group::all();
        return view('frontend.groups',compact('groups'));

    }
    public function create(){
        return view('frontend.group_create');
    }
    public function store(Request $request){
        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images' ;
            $file->move($destinationPath,$fileName);
        }
       Group::create([
            'name' => $request->name,
            'description' => $request->description,
            'image'=>$fileName,
            'user_id' => Auth::id()
        ]);
        return redirect()->route('group.index');
    }
    public function dashboard($groupid){
   $groups = Group::where('id',$groupid)->first();
        return view('frontend.group_dashboard',compact('groups'));
    }
}
