<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications.create');
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
        $application->role = request('role');
        $application->astonID = request('astonID');
        $application->studentType = request('studentType');
        $application->courseStudied = request('courseStudied');
        $application->relevantModuleGrades = request('relevantModuleGrades');
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
        $application->role = $request->role;
        $application->astonID = $request->astonID;
        $application->studentType = $request->studentType;
        $application->courseStudied = $request->courseStudied;
        $application->relevantModuleGrades = $request->relevantModuleGrades;
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
}
