<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\StudentModel;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = [];
        $url = url('/students-add');
        $title = "Student Regitration !!";
        $color = 'primary';
        $btname = 'SUBMIT';
        $data = compact('url', 'title', 'color', 'btname', 'students');
        return view('register')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $students = new StudentModel();
        $students->name = $request->name;
        $students->email = $request->email;
        $students->password = $request->password;
        $students->address = $request->address;
        $students->state = $request->state;
        $students->country = $request->country;
        $students->gender = $request->gender;
        $students->dob = $request->dob;
        $students->save();
        return redirect('/students-view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $students = StudentModel::all();
        return view('students-view', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = StudentModel::find($id);
        if (is_null($students)){
            return redirect('/students-view');
        }else{
            $url = url('/students-update')."/".$id;
            $color = 'success';
            $title = 'Student Details Update !!';
            $btname = 'Update !!';
            $data = compact('students', 'url', 'title', 'color', 'btname');
            return view('update')->with($data);
        }
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
        $students = StudentModel::find($id);
        $students->name = $request->name;
        $students->email = $request->email;
        $students->address = $request->address;
        $students->state = $request->state;
        $students->country = $request->country;
        $students->gender = $request->gender;
        $students->dob = $request->dob;
        $students->save();
        return redirect('/students-view');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = StudentModel::find($id);
        $students->delete();
        return redirect('/students-view');
    }
}
