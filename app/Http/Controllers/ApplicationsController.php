<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Job;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('applications.index',['applications' => Application::paginate(10)]);
    }

    public function userShow()
    {
        $application = Application::all();
        $user = Auth::user()->id; 
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();
        
        return view('applications.userShow',['applications' => Application::paginate(10),'myApplications'=> $myApplications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::all();
        $username = Auth::user()->name;
        $user_id = Auth::id(); 

        return view('applications.create',['jobs'=> $jobs,'user_id'=>$user_id,'username'=>$username]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = new Application();

        $application->name = request('name');
        $application->user_id = request('user_id');
        $application->role = request('role');
        $application->astonID = request('astonID');
        $application->studentType = request('studentType');
        $application->courseStudied = request('courseStudied');
        $application->relevantModuleGrades = request('relevantModuleGrades');
        $application->reasonForApplying = request('reasonForApplying');
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
    public function edit($id){

        
        return view('applications.edit',[
            'application' => Application::find($id)
        ]);

    $request->session()->flash('success', 'You have edited the user');
    }

    
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
    public function update(Request $request, $id)
    {

    
        $application = Application::findOrFail($id);

        $application->name = $request->name;
        $application->user_id = $request->user_id;
        $application->role = $request->role;
        $application->astonID = $request->astonID;
        $application->studentType = $request->studentType;
        $application->courseStudied = $request->courseStudied;
        $application->relevantModuleGrades = $request->relevantModuleGrades;

        $application->reasonForApplying = $request->reasonForApplying;
        $application->placementComplete = $request->placementComplete;

        $application->supportingInfo = $request->supportingInfo;
        $application->status = $request->status;


        $application->save();
        
        return redirect(route('applications.index'));
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

    public function statusAccepted(){

        return view('applications.admin-filters.statusAccepted',['applications' => Application::paginate(10)]);

    }

    public function underReview(){

        return view('applications.admin-filters.statusUnderReview',['applications' => Application::paginate(10)]);

    }

    public function offered(){

        return view('applications.admin-filters.statusOffered',['applications' => Application::paginate(10)]);

    }

    public function withdrawn(){

        return view('applications.admin-filters.statusWithdrawn',['applications' => Application::paginate(10)]);

    }


    
}
