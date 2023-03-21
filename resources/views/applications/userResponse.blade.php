@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">{{$application->role}} Application Response </h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> Please Update The Status Of Your Application As Soon As Possible</h5>
        </div>
</div>

<h1></h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card-padding"></div>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('applications.update', $application->id) }}">
                        @method('PATCH')
                        @csrf
                    

                    <div class="col-md-8">
                        <input id="id" type="hidden" name="id" 
                        value="{{ old('id') }} @isset($application) {{$application->id}} @endisset" >

                        @error('id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-md-8">
                        <input id="user_id" type="hidden" name="user_id" 
                        value="{{ old('user_id') }} @isset($application) {{$application->user_id}} @endisset" >

                        @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-8">
                        <input id="email" type="hidden" name="email" 
                        value="{{ old('email') }} @isset($application) {{$application->email}} @endisset" >

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- ROLE  -->

                    <div class="row mb-3">
                        <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                        <div class="col-md-8">
                            <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" 
                            value="{{ old('role') }} @isset($application) {{$application->role}} @endisset" readonly="readonly" hidden>
                            
                        <p id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" 
                        value="{{ old('role') }} @isset($application) {{$application->role}} @endisset" readonly="readonly" >{{$application->role}}</p>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <!-- ASTON ID -->

                    <div class="row mb-3">
                        <label for="astonID" class="col-md-4 col-form-label text-md-end">{{ __(' Aston ID') }}</label>

                        <div class="col-md-8">
                            <input id="astonID" type="text" class="form-control @error('astonID') is-invalid @enderror" name="astonID" 
                            value="{{ old('astonID') }} @isset($application) {{$application->astonID}} @endisset"  readonly="readonly" hidden>

                            <p id="astonID" type="text" class="form-control @error('astonID') is-invalid @enderror" name="astonID" 
                            value="{{ old('astonID') }} @isset($application) {{$application->astonID}} @endisset"  readonly="readonly">
                            {{$application->astonID}} 
                            </p>
                            @error('astonID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>


                        <!-- name  -->
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                            value="{{ old('name') }} @isset($application) {{$application->name}} @endisset" readonly="readonly" hidden>

                            <p id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                            value="{{ old('name') }} @isset($application) {{$application->name}} @endisset" readonly="readonly">
                            {{$application->name}}
                            </p>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <!-- student type  -->
                    <div class="row mb-3">
                        <label for="studentType" class="col-md-4 col-form-label text-md-end">{{ __(' Student Type') }}</label>

                        <div class="col-md-8">
                            <input id="studentType" type="text" class="form-control @error('studentType') is-invalid @enderror" name="studentType" 
                            value="{{ old('studentType') }} @isset($application) {{$application->studentType}} @endisset" readonly="readonly" hidden>
                            
                            <p id="studentType" type="text" class="form-control @error('studentType') is-invalid @enderror" name="studentType" 
                            value="{{ old('studentType') }} @isset($application) {{$application->studentType}} @endisset" readonly="readonly">
                            {{$application->studentType}}
                            </p>
                            @error('studentType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    
                    <!-- course studied  -->
                    <div class="row mb-3">
                        <label for="courseStudied" class="col-md-4 col-form-label text-md-end">{{ __(' Course Studied') }}</label>

                        <div class="col-md-8">
                            <input id="courseStudied" type="text" class="form-control @error('courseStudied') is-invalid @enderror" name="courseStudied" 
                            value="{{ old('courseStudied') }} @isset($application) {{$application->courseStudied}} @endisset" readonly="readonly" hidden>
                            <p  id="courseStudied" type="text" class="form-control @error('courseStudied') is-invalid @enderror" name="courseStudied" 
                            value="{{ old('courseStudied') }} @isset($application) {{$application->courseStudied}} @endisset" readonly="readonly" >
                            {{$application->courseStudied}} 
                            </p>

                            @error('courseStudied')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>


                    <!-- relevantModuleGrades -->
                    <div class="row mb-3">
                        <label for="relevantModuleGrades" class="col-md-4 col-form-label text-md-end">{{ __('Relevant Module Grades') }}</label>

                        <div class="col-md-8">
                            <input id="relevantModuleGrades" type="text" class="form-control @error('relevantModuleGrades') is-invalid @enderror" name="relevantModuleGrades" 
                            value="{{ old('relevantModuleGrades') }} @isset($application) {{$application->relevantModuleGrades}} @endisset" readonly="readonly" hidden>

                            <p id="relevantModuleGrades" type="text" class="form-control @error('relevantModuleGrades') is-invalid @enderror" name="relevantModuleGrades" 
                            value="{{ old('relevantModuleGrades') }} @isset($application) {{$application->relevantModuleGrades}} @endisset" readonly="readonly">
                            {{$application->relevantModuleGrades}}
                            </p>

                            @error('relevantModuleGrades')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <!-- reasonForApplying -->
                    <div class="row mb-3">
                        <label for="reasonForApplying" class="col-md-4 col-form-label text-md-end">{{ __('Reason For Applying') }}</label>

                        <div class="col-md-8">
                            <input id="reasonForApplying" type="text" class="form-control @error('reasonForApplying') is-invalid @enderror" name="reasonForApplying" 
                            value="{{ old('reasonForApplying') }} @isset($application) {{$application->reasonForApplying}} @endisset" readonly="readonly" hidden>

                            <p id="reasonForApplying" type="text" class="form-control @error('reasonForApplying') is-invalid @enderror" name="reasonForApplying" 
                            value="{{ old('reasonForApplying') }} @isset($application) {{$application->reasonForApplying}} @endisset" readonly="readonly">
                            {{$application->reasonForApplying}}
                            </p>

                            @error('reasonForApplying')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    

                    
                    <!-- unavailableDates -->
                    <div class="row mb-3">
                        <label for="unavailableDates" class="col-md-4 col-form-label text-md-end">Unavailable Dates Next Semester</label>

                        <div class="col-md-8">
                            <input id="unavailableDates" type="text" class="form-control @error('unavailableDates') is-invalid @enderror" name="unavailableDates" 
                            value="{{ old('unavailableDates') }} @isset($application) {{$application->unavailableDates}} @endisset" readonly="readonly" hidden>

                            <p id="unavailableDates" type="text" class="form-control @error('unavailableDates') is-invalid @enderror" name="unavailableDates" 
                            value="{{ old('unavailableDates') }} @isset($application) {{$application->unavailableDates}} @endisset" readonly="readonly">
                            {{$application->unavailableDates}}
                            </p>

                            @error('unavailableDates')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <!-- placementComplete -->
                    <div class="row mb-3">
                        <label for="placementComplete" class="col-md-4 col-form-label text-md-end">{{ __('Placement Complete') }}</label>

                        <div class="col-md-8">
                            <input id="placementComplete" type="text" class="form-control @error('placementComplete') is-invalid @enderror" name="placementComplete" 
                            value="{{ old('placementComplete') }} @isset($application) {{$application->placementComplete}} @endisset" readonly="readonly" hidden>

                            <p id="placementComplete" type="text" class="form-control @error('placementComplete') is-invalid @enderror" name="placementComplete" 
                            value="{{ old('placementComplete') }} @isset($application) {{$application->placementComplete}} @endisset" readonly="readonly">
                            {{$application->placementComplete}}
                            </p>

                            @error('placementComplete')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <!-- supportingInfo -->

                    <div class="row mb-3">
                        <label for="supportingInfo" class="col-md-4 col-form-label text-md-end">{{ __('Supporting Information') }}</label>

                        <div class="col-md-8">
                            <input id="supportingInfo" type="text" class="form-control @error('relevantModuleGrades') is-invalid @enderror" name="supportingInfo" 
                            value="{{ old('supportingInfo') }} @isset($application) {{$application->supportingInfo}} @endisset" readonly="readonly" hidden>

                            <p id="supportingInfo" type="text" class="form-control @error('relevantModuleGrades') is-invalid @enderror" name="supportingInfo" 
                            value="{{ old('supportingInfo') }} @isset($application) {{$application->supportingInfo}} @endisset" readonly="readonly">

                                {{$application->supportingInfo}}
                            </p>

                            @error('supportingInfo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>




                    <div class="row mb-3">
                        <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status *') }}</label>

                        <div class="col-md-8">
                            
                        <select name="status"id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" 
                            value="{{ old('status') }} @isset($application) {{$application->status}} @endisset" required  >
                            
                            <option value="" disabled selected>Select your option</option>
                            <option value="Accepted"> Accept </option>
                            <option value="Withdrew"> Withdraw </option>
                        </select>

                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>


                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                        Update
                            </button>

                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div  class="home-footer-padding"></div>
@include('layouts.footer')
@endsection
