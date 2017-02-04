<?php

namespace App\Http\Controllers;

use App\Skill;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class SkillController extends Controller
{
	public function create()
	{
		return view('skill.create');
	}

	public function store(Request $request)
	{
		$this->validate($request,[
			'name' => 'required',
			'description' =>'required'
		]);

		Skill::create($request->all());
		return redirect()->back()->with('success','submitted!');
	}

	public function edit($id)
	{
		//$skill = Skill::where('user_id',Auth::user()->id)->firstOrFail();
		$skill = Skill::find($id);
    	return view('skill.edit',compact('skill'));
	}

	public function update(Request $request, $id)
	{
		$this->validate($request,[
			'name' => 'required',
			'description' =>'required'
		]);

		Skill::find($id)->update($request->all());
		return redirect()->back()->with('success','updated!');
	}

	public function destroy($id)
	{
		Skill::find($id)->delete();
		return redirect()->back()->with('success','deleted!');
	}
}