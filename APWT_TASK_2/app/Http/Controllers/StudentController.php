<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function studentList(){
        // $student = array();

        // for($i=0; $i<5; $i++){
        //     $student = array(
        //         "name" => "Student " . ($i+1),
        //         "id" =>"00" . ($i+1)

        //     );
        //     $students[] = (object)$student; 
        // }

        // return view('student.studentList')->with('students', $students);
            $students = Student::all();
            return view('student.studentList')->with('students', $students);
    }
    public function studentEdit(Request $request){
        $student = Student::where('id', $request->id)->first();
        // return $student;
        return view('student.studentEdit')->with('student', $student);
        // return view('student.studentCreate')->with('student', $student);

    }
    public function studentEditSubmitted(Request $request){
        $student = Student::where('id', $request->id)->first();
        // return  $student;
        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->save();
        return redirect()->route('studentList');

    }

    public function studentDelete(Request $request){
        $student = Student::where('id', $request->id)->first();
        $student->delete();

        return redirect()->route('studentList');
    }

    public function signup(){
        return view('registration');
    }
    public function signupCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required|integer",
            'dob'=>'required',
            'email'=>'required|email' ,
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required|min:8',
            // 'confirm  password' => 'required|same:password',
        ],

        [
            'name.required'=>"Please insert you name here",
            'id.required' => 'Please insert your id here',
            'dob.required' => 'Please insert your date of birth here',
            'email.required' => 'Please insert your email here',
            'phone.required' => 'Please insert your phone number here',
            'password.required' => 'Please insert your password here'
            
            ]
        
        
    );


        return $request;
    }
    public function login(){
        return view('login');
    }
    public function loginCreateSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required|email' ,
            'password'=>'required|min:8',
            
        ],

        
        [
            'email.required' => 'Please insert your email here',
            'password.required' => 'Please insert your password here'
            ]
        
    );


        return $request;
    }

    public function contactus(){
        return view('contactus');
    }
    public function contactusCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'required|email' ,
            'comments' => 'required|min:10'
            
        ],

        ['name.required'=>"Please insert your name here",'email.required'=>"Please insert your email here"]
        
        
    );


        return $request;
    }
}
