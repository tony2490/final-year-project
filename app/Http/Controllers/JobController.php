<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        
        // $jobs = Job::all();

        $jobs = Job::latest()->get();
        
        return view('jobs.index',[
            'jobs' => $jobs,
        ]);
    }

    public function show($id){

        $job = Job::findorFail($id);

        return view('jobs.show',['job' => $job]);

    }

    public function create(){

        return view('jobs.create');
    }

    public function store(){
        $job = new Job();

        $job->course = request('course');
        $job->lecturer = request('lecturer');
        $job->duration = request('duration');

        $job->save();

        return redirect('/')->with('mssg', 'Your job has successfully been uploaded!');
    }

    public function destroy($id){
        $job = Job::findorFail($id);
        $job->delete();

        return redirect('/jobs');
    }
}
