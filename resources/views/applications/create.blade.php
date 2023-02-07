@extends('layouts.app')

@section('content')
<div class="wrapper-wrapper create-job">
    <h1> Apply for {{ $job-> course }}</h1>
    <form action="/applications" method="POST">
        @csrf
        <label for="lecturer"> Lecturer: </label>
        <input type="text" id="lecturer" name="lecturer">

        <label for="course"> Course Name: </label>
        <input type="text" id="course" name="course">

        <label for="duration">Duration: </label>
        <select name="duration" id="duration">
            <option value="1-2 Weeks"> 1-2 Weeks </option>
            <option value="2-4 Weeks"> 2-4 Weeks </option>
            <option value="4-6 Weeks"> 4-6 Weeks </option>
            <option value="6-8 Weeks"> 6-8 Weeks </option>
        </select>
        <input type="submit" value="Create job">
    </form>
</div>

@endsection
