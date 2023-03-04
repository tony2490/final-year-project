@extends('layouts.app')
@section('content')
<div class="wrapper job-index">
    <div class="row">
        <div class="col-12">
            <h1 class="float-left">Applications</h1>
        </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter
      </button>

      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
           <a href="/applications/statusAccepted"><button class="dropdown-item" type="button">
            Status: Successful
          </button></a>

          <a href="/"><button class="dropdown-item" type="button">
            <button class="dropdown-item" type="button">Status: Accepted</button>
          </button></a>

          <a href="/"><button class="dropdown-item" type="button">
            <button class="dropdown-item" type="button">Status: Under Review</button>
          </button></a>

          <a href="/"><button class="dropdown-item" type="button">
            <button class="dropdown-item" type="button">Status: Offered</button>
          </button></a>

        <a href="/"><button class="dropdown-item" type="button">
        <button class="dropdown-item" type="button">Status: Withdrawn</button>
        </button></a>
        
      </div>
    </div>





    <div class="card">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">Role</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>
            </thead>

       
    
            <tbody>
                @foreach($applications as $application)
                <?php
            if($application->status == "Accepted") :?>

                <tr>
                    <th scope="row"> {{$application->id}} </th>
                    <td> {{$application->role}} </td>
                    <td> {{$application->name}} </td>
                    <td> {{$application->status}} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('applications.edit',$application->id)}}" role="button"> Update </a>
                    </td>
                  </tr>
                  <?php endif; ?>
                @endforeach

 
            
            </tbody>

      
            
          </table>
          {{$applications->links()}}


    </div>


@endsection







