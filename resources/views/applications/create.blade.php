@extends('layouts.app')

@section('content')
<div class="wrapper-wrapper job-application">
    <h1> Role Application </h1>

    <form action="/applications" method="POST">
        @csrf

        <label for="role"> Role: </label>
        <input type="text" id="role" name="role">

        <br>

        <label for="name"> Name: </label>
        <input type="text" id="name" name="name">

        <br>

        <label for="astonID"> Aston ID: </label>
        <input type="text" id="astonID" name="astonID">
        <br>


        <label for="studentType">Student Type: </label>
        <select name="studentType" id="studentType">
            <option value="phd Student"> PHD Student </option>
            <option value="Final Year Student"> Final Year Student </option>
        </select>
        <br>

        <label for="courseStudied"> Course Studying: </label>
        <input type="text" id="courseStudied" name="courseStudied">
        <br>

        <label for="relevantModuleGrades"> Relevant Module Grades: </label>
        <input type="text" id="relevantModuleGrades" name="relevantModuleGrades">
        <br>

        <label for="supportingInfo"> Supporting Information: </label>
        <input type="text" id="supportingInfo" name="supportingInfo">
        <br>
     
        </select>
        <input type="submit" value="Apply">
    </form>
</div>

@endsection
