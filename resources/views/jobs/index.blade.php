@extends('layouts.app')

@section('content')
    <div class="wrapper job-index">
        <h1> Jobs </h1>

            Aston University Jobs
        </div>
        @foreach($jobs as $job)
        <div>
            <h4><a href="/jobs/{{$job->id}}">{{ $job-> course }} </a> </h4>
    </div>
        @endforeach

    
    
    </div>
@endsection



