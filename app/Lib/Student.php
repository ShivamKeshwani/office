<?php

namespace App\Lib;

use App\Http\Requests\StudentRequest;
use App\Models\StudentModel;

class Student{

    public function storetodb($request){
        $students = new StudentModel();
        $students->name = $request->name;
        $students->email = $request->email;
        $students->password = $request->password;
        $students->address = $request->address;
        $students->state = $request->state;
        $students->country = $request->country;
        $students->gender = $request->gender;
        $students->dob = $request->dob;

        return $students;
    }
    public static function tocreate(){
        $url = url('/students-add');
        $title = "Student Regitration !!";
        $color = 'primary';
        $btname = 'SUBMIT';
        $data = compact('url', 'title', 'color', 'btname');
        return $data;
    }
}
