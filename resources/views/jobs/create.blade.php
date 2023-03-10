
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
    
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
@include('layouts.footer')
@endsection
