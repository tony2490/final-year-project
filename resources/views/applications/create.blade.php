@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1> Role Application </h1>

                    <form action="/applications" method="POST">
                        @csrf
                       <!-- Role  -->
                        <div class="row mb-3">
                        <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('role') }}</label>

                        <div class="col-md-6">
                            
                        <select name="role"id="role" type="text" class="form-control @error('status') is-invalid @enderror" name="role" 
                            value=" " >

                            @foreach($jobs as $job)
                            
                            <option value="{{ $job-> moduleCode }} "> {{ $job-> moduleCode }}  </option>

                            @endforeach
                      
                        </select>

                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                        <!-- USER ID -->
                        <input id="user_id" class="form-control" type="hidden" name="user_id"  value="{{$user_id}}" required>
                        @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       


                    <div class="row mb-3">
                    <label for="astonID" class="col-md-4 col-form-label text-md-end">Aston ID</label>

                    <div class="col-md-6">
                        <input id="astonID" class="form-control" type="text" name="astonID"  value="" required>

                        @error('astonID')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

                    <!-- Name  -->
                    <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                    <div class="col-md-6">
                        <input id="name" class="form-control" type="text" name="name"  value="" required>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

                    <!-- Student Type  -->
                    <div class="row mb-3">
                        <label for="studentType" class="col-md-4 col-form-label text-md-end">{{ __('Student Type') }}</label>

                        <div class="col-md-6">
                            
                        <select name="studentType"id="studentType" type="text" class="form-control @error('studentType') is-invalid @enderror" name="studentType" 
                            value="" >
                            <option value="PHD Student"> PHD Student </option>
                            <option value="Final Year Student"> Final Year Student </option>
                      
                        </select>

                            @error('studentType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>


                    <!-- Course Studied  -->
                    <div class="row mb-3">
                    <label for="courseStudied" class="col-md-4 col-form-label text-md-end">Course Studied</label>

                    <div class="col-md-6">
                        <input id="courseStudied" class="form-control" type="text" name="courseStudied"  value="" required>

                        @error('courseStudied')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

                    <!-- relevantModuleGrades -->
                    <div class="row mb-3">
                    <label for="relevantModuleGrades" class="col-md-4 col-form-label text-md-end">Relevant Module Grades</label>

                    <div class="col-md-6">
                        <input id="relevantModuleGrades" class="form-control" type="text" name="relevantModuleGrades"  value="" required>

                        @error('relevantModuleGrades')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

                    <!-- supportingInfo  -->

                    <div class="row mb-3">
                    <label for="supportingInfo" class="col-md-4 col-form-label text-md-end">Supporting Information</label>

                    <div class="col-md-6">
                        <input id="supportingInfo" class="form-control" type="text" name="supportingInfo"  value="" required>

                        @error('supportingInfo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

                    <!-- status -->
                    <input type="hidden" id="status" name="status" value="Under Review">

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                        Apply
                            </button>

                        </div>  
                    </div>
            
                    </form>
                    
                </div>
            </div>
    </div>
</div>

@endsection
