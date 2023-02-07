@extends('layouts.app')

@section('content')
<div class="wrapper job-details">
    <h1>    Role for {{ $job->course}} </h1>
    <p class="lecturer"> lecturer - {{$job->lecturer}} </p>
    <p class="duration"> duration - {{$job->duration}} </p>
    @can('is-admin')
    <form action="{{route('jobs.destroy', $job->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Remove job</button>
    </form>
    @endcan
    <a href="/applications/create" class="back">  Apply </a>
</div>

<a href="/jobs" class="back"> <- Back to all jobs </a>
@endsection
