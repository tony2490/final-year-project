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
                <th scope="col">Course</th>
                <th scope="col">Lecturer</th>
                <th scope="col">Duration</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)

                <tr>
                
                    <td> {{$job->course}} </td>
                    <td> {{$job->lecturer}} </td>
                    <td> {{$job->duration}} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="/jobs/{{$job->id}}" role="button"> View </a>

                    </td>
                  </tr>

         
            
            
            </tbody>
            @endforeach
          </table>


    </div>


@endsection






