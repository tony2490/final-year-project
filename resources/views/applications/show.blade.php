@extends('layouts.app')

@section('content')
<div class="wrapper job-details">
    <h1>    Application for {{ $application->name}} </h1>

    <p class="name"> Name - {{$application->name}} </p>
    <p class="role"> Role - {{$application->role}} </p>
    <p class="astonID"> Aston ID - {{$application->astonID}} </p>
    <p class="studentType"> Student Type - {{$application->studentType}} </p>
    <p class="courseStudied"> Course Studied - {{$application->courseStudied}} </p>
    <p class="relevantModuleGrades"> Relevant Module Grades - {{$application->relevantModuleGrades}} </p>
    <p class="supportingInfo"> Supporting Information - {{$application->supportingInfo}} </p>


  
</div>

<a href="/applications" class="back"> <- Back to all applicants </a>
@endsection
