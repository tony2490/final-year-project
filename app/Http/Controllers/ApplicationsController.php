<?php

namespace App\Http\Controllers;

use App\Models\adminFilteredModuleCode;
use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Job;

use App\Models\filteredModuleCode;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        
        return view('applications.index',['jobs'=>$jobs, 'applications' => Application::paginate(10)]);
    }

    public function index2()
    {
        $jobs = Job::all();
        
        return view('applications.index2',['jobs'=>$jobs, 'applications' => Application::paginate(10)]);
    }


    // this function return the logged in user with a list of all ther application 
        public function userShow()
    {
        $application = Application::all();
        $jobs = Job::all();
        $user = Auth::user()->id; 
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();
        
        return view('applications.userShow',['jobs'=> $jobs,'applications' => Application::paginate(10),'myApplications'=> $myApplications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  this function provides the application form details when a student is applying for a role 
    public function create()
    {
        $jobs = Job::all();
        $username = Auth::user()->name;
        $user_id = Auth::id(); 
        $email = Auth::user()->email;

        return view('applications.create',['jobs'=> $jobs,'user_id'=>$user_id,'username'=>$username, 'email'=>$email]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  this function stores all the fields from the application form into the database table 
    public function store(Request $request)
    {
        $application = new Application();

        $application->name = request('name');
        $application->user_id = request('user_id');
        $application->email = request('email');
        $application->role = request('role');
        $application->astonID = request('astonID');
        $application->studentType = request('studentType');
        $application->courseStudied = request('courseStudied');
        $application->relevantModuleGrades = request('relevantModuleGrades');
        $application->reasonForApplying = request('reasonForApplying');
        $application->unavailableDates = request('unavailableDates');
        $application->placementComplete = request('placementComplete');
        $application->supportingInfo = request('supportingInfo');
        $application->status = request('status');


        $application->save();

        return redirect('/')->with('mssg', 'Application Recieved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  this function shows the selected application 
    public function show($id)
    {
        $application = Application::findorFail($id);

        return view('applications.show',['application' => $application]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  this function allows the user to edit an application 
    public function edit($id){

        
        return view('applications.edit',[
            'application' => Application::find($id)
        ]);

    $request->session()->flash('success', 'You have edited the user');
    }

    // this function allows the logged in students to view their application and respond to an offer 
    public function userResponse($id){
        $user = Auth::user()->id; 
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.userResponse',[
            'application' => Application::find($id),
            'myApplications'=> $myApplications,
            'applications' => Application::paginate(10)
        ]);

    $request->session()->flash('success', 'You have responded');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //  this function allows users to update an application in the databse 
     public function update(Request $request, $id)
    {

        $application = Application::findOrFail($id);

        $application->name = $request->name;
        $application->user_id = $request->user_id;
        $application->email = $request->email;
        $application->role = $request->role;
        $application->astonID = $request->astonID;
        $application->studentType = $request->studentType;
        $application->courseStudied = $request->courseStudied;
        $application->relevantModuleGrades = $request->relevantModuleGrades;

        $application->reasonForApplying = $request->reasonForApplying;
        $application->unavailableDates = $request->unavailableDates;
        $application->placementComplete = $request->placementComplete;

        $application->supportingInfo = $request->supportingInfo;
        
        $application->status = $request->status;



        $application->save();
        
        return redirect('welcomeUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // this function allows this page to use the filter based on the module code 

    public function statusAcceptedAdmin(){

        $adminLatestModule = adminFilteredModuleCode::all('filteredModuleCode');
        $adminLatestModule = adminFilteredModuleCode::orderBy('id', 'desc')->first();

        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();
        return view('applications.admin-filters.statusAccepted',['adminLatestModule'=>  $adminLatestModule, 'jobs'=> $jobs,'applications' => Application::paginate(10)]);

    }

    
    // this function allows this page to use the filter based on the module code 

    public function underReviewAdmin(){
        $adminLatestModule = adminFilteredModuleCode::all('filteredModuleCode');
        $adminLatestModule = adminFilteredModuleCode::orderBy('id', 'desc')->first();

        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.admin-filters.statusUnderReview',['adminLatestModule'=>  $adminLatestModule, 'jobs'=> $jobs,'applications' => Application::paginate(10)]);

    }

    // this function allows this page to use the filter based on the module code 
    public function offeredAdmin(){
        $adminLatestModule = adminFilteredModuleCode::all('filteredModuleCode');
        $adminLatestModule = adminFilteredModuleCode::orderBy('id', 'desc')->first();

        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.admin-filters.statusOffered',['adminLatestModule'=>  $adminLatestModule, 'jobs'=> $jobs,'applications' => Application::paginate(10)]);

    }

    
    // this function allows this page to use the filter based on the module code 

    public function withdrawnAdmin(){
        $adminLatestModule = adminFilteredModuleCode::all('filteredModuleCode');
        $adminLatestModule = adminFilteredModuleCode::orderBy('id', 'desc')->first();

        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.admin-filters.statusWithdrawn',['adminLatestModule'=>  $adminLatestModule, 'jobs'=> $jobs,'applications' => Application::paginate(10)]);

    }

    
    // this function allows this page to use the filter based on the module code 

    public function unsucessfulAdmin(){
        $adminLatestModule = adminFilteredModuleCode::all('filteredModuleCode');
        $adminLatestModule = adminFilteredModuleCode::orderBy('id', 'desc')->first();

        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.admin-filters.statusUnsuccessful',['adminLatestModule'=>  $adminLatestModule, 'jobs'=> $jobs,'applications' => Application::paginate(10)]);

    }

    
    // this function allows this page to use the filter based on the module code 

    public function assignedAdmin(){
        $adminLatestModule = adminFilteredModuleCode::all('filteredModuleCode');
        $adminLatestModule = adminFilteredModuleCode::orderBy('id', 'desc')->first();

        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.admin-filters.statusAssigned',['adminLatestModule'=>  $adminLatestModule, 'jobs'=> $jobs,'applications' => Application::paginate(10)]);

    }

    
    // this function allows this page to use the filter based on the module code 


    public function moduleCodeAdmin(){
        $adminLatestModule = adminFilteredModuleCode::all('filteredModuleCode');
        $adminLatestModule = adminFilteredModuleCode::orderBy('id', 'desc')->first();

        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.admin-filters.moduleCode',['adminLatestModule'=>  $adminLatestModule, 'jobs'=> $jobs,'applications' => Application::paginate(10)]);

    }

    
    // this function allows this page to use the filter based on the module code 

    public function statusAcceptedStudent(){
        $latestModule = filteredModuleCode::where('filteredModuleCode')->latest()->get();
        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.student-filters.statusAccepted',['latestModule' => $latestModule, 'jobs'=> $jobs,'application' => $application,'myApplications'=> $myApplications,'applications' => Application::paginate(10)]);

    }

    // this function allows this page to use the filter based on the module code 

    public function statusUnderReviewStudent(){

        $latestModule = filteredModuleCode::where('filteredModuleCode')->latest()->get();
        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.student-filters.statusUnderReview',['latestModule' => $latestModule,'jobs'=> $jobs, 'application' => $application,'myApplications'=> $myApplications,'applications' => Application::paginate(10)]);
    }

    
    // this function allows this page to use the filter based on the module code 
    public function statusOfferedStudent(){
        $latestModule = filteredModuleCode::where('filteredModuleCode')->latest()->get();
        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.student-filters.statusOffered',['latestModule' => $latestModule, 'jobs'=> $jobs,'application' => $application,'myApplications'=> $myApplications,'applications' => Application::paginate(10)]);
    }

    
    // this function allows this page to use the filter based on the module code 

    public function statusWithdrawnStudent(){
        $latestModule = filteredModuleCode::where('filteredModuleCode')->latest()->get();
        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.student-filters.statusWithdrawn',['latestModule' => $latestModule, 'jobs'=> $jobs, 'application' => $application,'myApplications'=> $myApplications,'applications' => Application::paginate(10)]);
    }

    
    // this function allows this page to use the filter based on the module code 

    public function statusUnsuccessfulStudent(){
        $latestModule = filteredModuleCode::where('filteredModuleCode')->latest()->get();
        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.student-filters.statusUnsuccessful',['latestModule' => $latestModule,'jobs'=> $jobs, 'application' => $application,'myApplications'=> $myApplications,'applications' => Application::paginate(10)]);
    }

    
    // this function allows this page to use the filter based on the module code 

    public function statusAssignedStudent(){
        $latestModule = filteredModuleCode::where('filteredModuleCode')->latest()->get();
        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.student-filters.statusAssigned',['latestModule' => $latestModule,'jobs'=> $jobs, 'application' => $application,'myApplications'=> $myApplications,'applications' => Application::paginate(10)]);
    }


    // this function allows this page to use the filter based on the module code 
    public function moduleCode(){


        // $latestModule = filteredModuleCode::orderBy('id', 'desc')->first();
        $latestModule = filteredModuleCode::all('filteredModuleCode');
        $latestModule = filteredModuleCode::orderBy('id', 'desc')->first();
        
        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('applications.student-filters.moduleCode',['latestModule' => $latestModule,'jobs'=> $jobs, 'application' => $application,'myApplications'=> $myApplications,'applications' => Application::paginate(10)]);
    }
    
    

}
