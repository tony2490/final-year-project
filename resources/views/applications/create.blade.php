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


                    <div class="row mb-3">
                        <label for="role" class="col-md-4 col-form-label text-md-end">Role</label>

                        <div class="col-md-6">
                            <input id="role" class="form-control" type="text" name="role"  value="" >

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
                    </div>


                    <div class="row mb-3">
                    <label for="astonID" class="col-md-4 col-form-label text-md-end">Aston ID</label>

                    <div class="col-md-6">
                        <input id="astonID" class="form-control" type="text" name="astonID"  value="" >

                        @error('astonID')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

                    <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                    <div class="col-md-6">
                        <input id="name" class="form-control" type="text" name="name"  value="" >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

                    <div class="row mb-3">
                    <label for="studentType" class="col-md-4 col-form-label text-md-end">Student Type</label>

                    <div class="col-md-6">
                        <input id="studentType" class="form-control" type="text" name="studentType"  value="" >

                        @error('studentType')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>


                    
                    <div class="row mb-3">
                    <label for="courseStudied" class="col-md-4 col-form-label text-md-end">Course Studied</label>

                    <div class="col-md-6">
                        <input id="courseStudied" class="form-control" type="text" name="courseStudied"  value="" >

                        @error('courseStudied')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

                       
                    <div class="row mb-3">
                    <label for="relevantModuleGrades" class="col-md-4 col-form-label text-md-end">Relevant Module Grades</label>

                    <div class="col-md-6">
                        <input id="relevantModuleGrades" class="form-control" type="text" name="relevantModuleGrades"  value="" >

                        @error('relevantModuleGrades')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>


                    <div class="row mb-3">
                    <label for="supportingInfo" class="col-md-4 col-form-label text-md-end">Supporting Information</label>

                    <div class="col-md-6">
                        <input id="supportingInfo" class="form-control" type="text" name="supportingInfo"  value="" >

                        @error('supportingInfo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>  
                    </div>

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
