
@extends('layouts.app')

@section('content')
<h1> Role for {{ $job->course}} </h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
            
                    <div class="row mb-3">
                        <label for="lecturer" class="col-md-4 col-form-label text-md-end">Lecturer: </label>

                        <div class="col-md-6">
                            <input id="lecturer" type="text" class="form-control @error('lecturer') is-invalid @enderror" name="lecturer" 
                            value="{{ old('lecturer') }} @isset($job) {{$job->lecturer}} @endisset" readonly="readonly">

                            @error('lecturer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>


                    <div class="row mb-3">
                        <label for="duration" class="col-md-4 col-form-label text-md-end">Duration: </label>

                        <div class="col-md-6">
                            <input id="duration" type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" 
                            value="{{ old('duration') }} @isset($job) {{$job->duration}} @endisset" readonly="readonly">

                            @error('duration')
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

