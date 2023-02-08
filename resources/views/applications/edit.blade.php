@extends('layouts.app')

@section('content')
<h1>Edit Application</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('applications.update', $application->id) }}">
                        @method('PATCH')
                        @include('applications.partials.form')
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
