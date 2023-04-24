<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\filteredModuleCode;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    // this function allows the jobs page to access the filters 
    public function index(){
        
        // $jobs = Job::all();
        $latestModule = filteredModuleCode::all('filteredModuleCode');
        $latestModule = filteredModuleCode::orderBy('id', 'desc')->first();

        // $jobs = Job::latest()->get();
          
                
        return view('jobs.index',[
           
            'jobs' => Job::paginate(10),
            'latestModule' => $latestModule,

        ]);
    }
    // this function return the job selected 

    public function show($id){

        $job = Job::findorFail($id);

        return view('jobs.show',['job' => $job]);

    }

    // this function directs users to create a job page 
    public function create(){

        return view('jobs.create');
    }

    // this function stores the create job to the database table 

    public function store(){
        $job = new Job();

        $job->moduleCode = request('moduleCode');
        $job->hiringManager = request('hiringManager');
        $job->jobDescription = request('jobDescription');
        $job->hourlyRate = request('hourlyRate');
        $job->closingDate = request('closingDate');
        $job->positionsAvailable = request('positionsAvailable');
        


        $job->save();

        return redirect('/')->with('mssg', 'Your job has successfully been uploaded!');
    }

    // this function allows users to delete the job 

    public function destroy($id){
        $job = Job::findorFail($id);
        $job->delete();

        return redirect('/jobs');
    }
   // this function allows the jobs page to access the filters 
    public function moduleCode(){
        
        // $latestModule = filteredModuleCode::orderBy('id', 'desc')->first();
        $latestModule = filteredModuleCode::all('filteredModuleCode');
        $latestModule = filteredModuleCode::orderBy('id', 'desc')->first();
        
        $user = Auth::user()->id; 
        $jobs = Job::all();
        $application = Application::all();
        $myApplications = Application::with('user')->where('applications.user_id', '=', $user)->get();

        return view('jobs.filters.moduleCode',['latestModule' => $latestModule,'jobs'=> $jobs, 'application' => $application,'myApplications'=> $myApplications,'applications' => Application::paginate(10)]);

    }
}
