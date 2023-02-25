
@extends('layouts.app')
@section('content')

<div class="flex-center position-ref full-height">


            <div class="content">
                <img src="/img/teaching.jpg">
                <div class="title m-b-md">
                    Aston University Flex
                </div>
                @can('is-admin')
                <p class="mssg">{{ session('mssg') }} </p>
                <a href=" {{route('jobs.create') }}"> Create A Job</a>
                @endcan
                </div>

            </div>
        </div>
@endsection