
@extends('layouts.app')

@section('content')
<h1> Role for {{ $job->moduleCode}} </h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
            
                    <div class="row mb-3">
                        <label for="hiringManager" class="col-md-4 col-form-label text-md-end">Hiring Manager: </label>

                        <div class="col-md-6">
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

                        <div class="col-md-6">
                            <input id="jobDescription" type="text" class="form-control @error('jobDescription') is-invalid @enderror" name="jobDescription" 
                            value="{{ old('jobDescription') }} @isset($job) {{$job->jobDescription}} @endisset" readonly="readonly">

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
             
                       

                    <form action="/applications/create">
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                            Apply
                                </button>

                            </div>
                        </div>
                    </form>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

