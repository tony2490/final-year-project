@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Create A New Job</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> Create A New Teaching Assistant Job Application</h5>
        </div>
</div>
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card-padding"></div>
            <div class="card">
                <div class="card-body">
                    <!-- <h1> Create a new job</h1> -->
                    <form action="/jobs" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="hiringManager" class="col-md-4 col-form-label text-md-end">Hiring Manager: </label>

                            <div class="col-md-8">
                                <input id="hiringManager" class="form-control" type="text" name="hiringManager"  value="" placeholder="Please Enter The Hiring Manager's Name " required>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>

                        <div class="row mb-3">
                            <label for="moduleCode" class="col-md-4 col-form-label text-md-end"> Module Code: </label>

                            <div class="col-md-8">
                                <input id="moduleCode" class="form-control" type="text" name="moduleCode" placeholder="Please Enter The Module Code" value=""  required>

                                @error('moduleCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>


                        <div class="row mb-3">
                            <label for="jobDescription" class="col-md-4 col-form-label text-md-end"> Job Description </label>

                            <div class="col-md-8">
                                <textarea id="jobDescription" class="form-control" type="text" name="jobDescription"  value="" placeholder="Please Provide Description Of The Role" required></textarea>
        
                                @error('jobDescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>

                        <div class="row mb-3">
                            <label for="hourlyRate" class="col-md-4 col-form-label text-md-end"> Hourly Rate (In £): </label>

                            <div class="col-md-8">
                                <input id="hourlyRate" class="form-control" type="number" name="hourlyRate" placeholder="Please Enter The Hourly Rate" value=""  required>

                                @error('hourlyRate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>

                        <div class="row mb-3">
                            <label for="positionsAvailable" class="col-md-4 col-form-label text-md-end"> Available Positions: </label>

                            <div class="col-md-8">
                                <input id="positionsAvailable" class="form-control" type="number"  name="positionsAvailable" placeholder="Please Enter The Available Positions" value=""  required>

                                @error('positionsAvailable')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>

                        <div class="row mb-3">
                            <label for="closingDate" class="col-md-4 col-form-label text-md-end"> Closing Date: </label>

                            <div class="col-md-8">
                                <input id="closingDate" class="form-control" type="date" name="closingDate" placeholder="Please Enter The Closing Date" value=""  required>

                                @error('closingDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>

                        


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                            Submit
                                </button>

                            </div>  
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div  class="home-footer-padding"></div>
@include('layouts.footer')
@endsection
