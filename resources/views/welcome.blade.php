
@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">


            <div class="content">
                <img src="/img/teaching.jpg">
                <div class="title m-b-md">
                    Aston University Flex
                </div>
                <p class="mssg">{{ session('mssg') }} </p>
                <a href=" {{route('jobs.create') }}"> Create A Job</a>

               
                    
                </div>
            </div>
        </div>
@endsection