@extends('layouts.app')

@section('content')
<div class="wrapper job-index">
    <div class="row">
        <div class="col-12">
            <h1 class="float-left">Jobs</h1>
        </div>
    </div>
    


    <div class="card">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Module</th>
                <th scope="col">Hiring Manager</th>
                <th scope="col">Job Description</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)

                <tr>
                
                    <td> {{$job->moduleCode}} </td>
                    <td> {{$job->hiringManager}} </td>
                    <td> {{$job->jobDescription}} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="/jobs/{{$job->id}}" role="button"> View </a>

                    </td>
                  </tr>

         
            
            
            </tbody>
            @endforeach
          </table>


    </div>


@endsection






