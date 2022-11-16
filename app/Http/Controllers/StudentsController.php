<?php

namespace App\Http\Controllers;

use App\Models\StudentsModel;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //

    public function index()
    {
        // $students = new StudentsModel();
        // echo "<pre>";
        // print_r($students);
        // die;
        return view('form');
    }

    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request);
        // die;
        // $student = new StudentsModel;

        // $data = array(
        //     $student->studentFullName => $request['studentFullName'],
        //     $student->studentUserName => $request['studentUserName'],
        //     $student->studentEmail => $request['studentEmail'],
        //     $student->studentPhoneNumber => $request['studentPhoneNumber'],
        //     $student->studentGender => $request['studentGender'],
        //     $student->studentAddress => $request['studentAddress'],
        // );

        // echo "<pre>";
        // print_r($data);
        // die;

        $student = new StudentsModel;
        $student->studentFullName = $request['studentFullName'];
        $student->studentUserName = $request['studentUserName'];
        $student->studentEmail = $request['studentEmail'];
        $student->studentPhoneNumber = $request['studentPhoneNumber'];
        $student->studentGender = $request['studentGender'];
        $student->studentAddress = $request['studentAddress'];
        $student->save();



    }


    public function students()
    {
        $students = StudentsModel::all();
        // echo "<pre>";
        // print_r($students->toArray());
        // die;
        $data = compact("students");
        return view('students')->with($data);
    }

    public function updateview($id)
    {
        $student = StudentsModel::find($id);
        // echo "<pre>";
        // print_r($students->toArray());
        // die;
        $data = compact('student');
        return view("studentUpdate", $data);
    }

    public function update($id, Request $request2)
    {
        $student = StudentsModel::find($id);

        $student->studentFullName = $request2['studentFullName'];
        $student->studentUserName = $request2['studentUserName'];
        $student->studentEmail = $request2['studentEmail'];
        $student->studentPhoneNumber = $request2['studentPhoneNumber'];
        $student->studentGender = $request2['studentGender'];
        $student->studentAddress = $request2['studentAddress'];
        $student->save();
        return redirect('/students');


    }


    public function deleteStudent($id)
    {
        $student = StudentsModel::find($id);
        // echo "<pre>";
        // print_r($student->toArray());
        if(!is_null($student)){
            $student->delete();
        }
        return redirect('/students');
    }
}