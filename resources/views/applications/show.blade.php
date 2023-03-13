@extends('layouts.app')

@section('content')
<div class="wrapper job-details">
    <h1>    Application for {{ $application->name}} </h1>

    <p class="name"> Name - {{$application->name}} </p>
    <p class="user_id"> User ID - {{$application->user_id}} </p>
    <p class="role"> Role - {{$application->role}} </p>
    <p class="astonID"> Aston ID - {{$application->astonID}} </p>
    <p class="studentType"> Student Type - {{$application->studentType}} </p>
    <p class="courseStudied"> Course Studied - {{$application->courseStudied}} </p>
    <p class="relevantModuleGrades"> Relevant Module Grades - {{$application->relevantModuleGrades}} </p>
    <p class="reasonForApplying"> Reason For Applying - {{$application->reasonForApplying}} </p>
    <p class="placementComplete"> Placement Completed? - {{$application->placementComplete}} </p>
    <p class="supportingInfo"> Supporting Information - {{$application->supportingInfo}} </p>
    <p class="status"> Status - {{$application->status}} </p>
    @can('is-admin')

    
    <label for="status">Update Status: </label>
        <select name="status" id="status">
            <option value="Under Review"> Under Review </option>
            <option value="Offered"> Offered </option>
            <option value="Unsuccessful"> Unsuccessful </option>
        </select>
    @endcan

  
</div>

<a href="/applications" class="back"> <- Back to all applicants </a>
<div  class="home-footer-padding"></div>
@include('layouts.footer')
@endsection
