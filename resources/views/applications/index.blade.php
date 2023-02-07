@extends('layouts.app')

@section('content')
    <div class="wrapper job-index">
        <h1> Applications </h1>

            Aston University Applicants
        </div>
        @foreach($applications as $application)
        <div>
            <h4><a href="/applications/{{$application->id}}">{{ $application-> name }} </a> </h4>
    </div>
        @endforeach

    
    
    </div>
@endsection



