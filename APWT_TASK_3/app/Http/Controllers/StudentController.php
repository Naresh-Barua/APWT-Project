<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function signup(){
        return view('registration');
    }
    public function signupCreateSubmitted(Request $request){
        $rules= [
            'name'=>"required|min:5|max:20",
            'username'=>"required|min:2|max:20",
            "stuid"=>"required|integer",
            'dob'=>'required|after_or_equal:1990-01-01|before:today',
            'email'=>'required|email' ,
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirm password' => 'same:password|min:8',
        ];

        [
            'name.required'=>"Please insert you name here",
            'username.required'=>"Please insert you username here",
            'stuid.required' => 'Please insert your id here',
            'dob.required' => 'Please insert your date of birth here',
            'email.required' => 'Please insert your email here',
            'phone.required' => 'Please insert your phone number here',
            'password.required' => 'Please insert your password here',
            'confirm password.required' => 'Please insert your password here'
            ];

    $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect('signup')
            ->withInput()
            ->withErrors($validator);
        }

        else{
            $data = $request->input();
                $student = new Student;
                $student->name = $data['name'];
                $student->username = $data['username'];
                $student->stuid = $data['stuid'];
                $student->dob = $data['dob'];
                $student->email = $data['email'];
                $student->phone = $data['phone'];
                $student->password = $data['password'];

                $student->save();
                return redirect('login')->withSuccess('Registered successfully!');

        }
    }

    public function insert(Request$request){
        $name = $request->input('name');
        $username = $request->input('username');
        $stuid = $request->input('stuid');
        $dob = $request->input('dob');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = $request->input('password');
        $data=array('name'=>$name,"username"=>$username,"stuid"=>$stuid,"dob"=>$dob,"email"=>$email,"phone"=>$phone,"password"=>$password);
        DB::table('students')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }

        

    public function login(){
        return view('login');
    }


    public function loginCreateSubmitted(Request $request){
        $validate = $request->validate([
            "username"=>"required|min:2|max:20",
            'password'=>'required|min:8',
            
        ],
        [
            'username.required'=>"Please insert you username here",
            'password.required' => 'Please insert your password here'
            ]
        
    );
    $student = Student::where('username',$request->username)

        ->where('password',$request->password)

        ->first();
        if($student){

        $request->session()->put('student',$student->username);

        return redirect()->route('dashboard')->withSuccess('Signed in');

        }

        return redirect("login")->withSuccess('Login details are not valid');

    }

    public function dashboard(Request $request){

        $student = Student::where('username', $request->session()->get('student'))->first();

            return view('dashboard')->with('student', $student);
       
    }

    public function studentEdit(Request $request){
        $student = Student::where('username', $request->session()->get('student'))->first();
        // return $student;
        return view('profile')->with('student', $student);
        // return view('student.studentCreate')->with('student', $student);

    }
    public function studentEditSubmitted(Request $request){
        $student = Student::where('username', $request->session()->get('student'))->first();
        // return  $student;
        $student->name = $request->name;
        $student->stuid = $request->stuid;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->phone = $request->phone;


        $student->save();
        return redirect()->route('dashboard');

    }

    public function profile(Request $request){
       
            return view('profile');
       
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    

    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
