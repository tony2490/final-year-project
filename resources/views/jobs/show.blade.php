
@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Teaching Assistant Role for {{ $job->moduleCode}}</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> Please Read The Details Of The Role Carefully Before Applying</h5>
        </div>
        <h1>  </h1>
</div>

<!-- <h1> Role for {{ $job->moduleCode}} </h1> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
            
                    <div class="row mb-3">
                        <label for="hiringManager" class="col-md-4 col-form-label text-md-end">Hiring Manager: </label>

                        <div class="col-md-8">
                            <input id="hiringManager" type="text" class="form-control @error('hiringManager') is-invalid @enderror" name="hiringManager" 
                            value="{{ old('hiringManager') }} @isset($job) {{$job->hiringManager}} @endisset" readonly="readonly">

                            @error('hiringManager')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>


                    <div class="row mb-3">
                        <label for="jobDescription" class="col-md-4 col-form-label text-md-end">Job Description: </label>

                        <div class="col-md-8" rows="4" cols="50">
                            <p id="jobDescription" type="text" class="form-control @error('jobDescription') is-invalid @enderror" name="jobDescription" 
                            value="{{ old('jobDescription') }} @isset($job)  @endisset" readonly="readonly">{{$job->jobDescription}}  </p>

                            @error('jobDescription')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          
                        </div>
                        
                    </div>
                    @can('is-admin')
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">                     
                                <form action="{{route('jobs.destroy', $job->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">
                                      Remove Job
                                    </button>
                                </form> 
                        </div>
                    </div>
                    @endcan
             
                       
                    @cannot('is-admin')
                    <form action="/applications/create">
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                            Apply
                                </button>

                            </div>
                        </div>
                    </form>
                    @endcannot

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@include('layouts.footer')
@endsection

