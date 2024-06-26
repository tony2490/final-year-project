<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filteredModuleCode;

class filteredModuleCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // this function stores the module code selected for filter in the database table for jobs
     public function jobStore(Request $request)
     {
         $filteredModuleCode = new filteredModuleCode;
 
         $filteredModuleCode->filteredModuleCode = $request->filteredModuleCode;
 
         $filteredModuleCode->save();
 
 
 
         return redirect('/jobs/moduleCode');
     }

      // this function stores the module code selected for filter in the database table for applications
    public function store(Request $request)
    {
        $filteredModuleCode = new filteredModuleCode;

        $filteredModuleCode->filteredModuleCode = $request->filteredModuleCode;

        $filteredModuleCode->save();



        return redirect('/myApplications/moduleCode');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
