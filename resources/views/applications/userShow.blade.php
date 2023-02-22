@extends('layouts.app')

@section('content')
<div class="wrapper job-index">
    <div class="row">
        <div class="col-12">
            <h1 class="float-left">Applications</h1>
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
                @foreach($myApplications as $myApplication)

                <tr>
                    <th scope="row"> {{$myApplication->id}} </th>
                    <td> {{$myApplication->role}} </td>
                    <td> {{$myApplication->name}} </td>
                    <td> {{$myApplication->status}} </td>
                    <td>

                    </td>
                  </tr>

                @endforeach
            
            
            </tbody>
          </table>
 

    </div>


@endsection







