@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1> Create a new job</h1>
                    <form action="/jobs" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label for="lecturer" class="col-md-4 col-form-label text-md-end">Lecturer: </label>

                            <div class="col-md-6">
                                <input id="lecturer" class="form-control" type="text" name="lecturer"  value="" >

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>

                        <div class="row mb-3">
                            <label for="moduleCode" class="col-md-4 col-form-label text-md-end"> Module Code: </label>

                            <div class="col-md-6">
                                <input id="moduleCode" class="form-control" type="text" name="moduleCode"  value="" >

                                @error('moduleCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>


                        <div class="row mb-3">
                            <label for="duration" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                
                            <select name="duration"id="status" type="text" class="form-control" name="duration"  >
                                
                            <option value="1-2 Weeks"> 1-2 Weeks </option>
                            <option value="2-4 Weeks"> 2-4 Weeks </option>
                            <option value="4-6 Weeks"> 4-6 Weeks </option>
                            <option value="6-8 Weeks"> 6-8 Weeks </option>
                            </select>

                                @error('stdurationatus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
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
@endsection
