@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Create  A New Teaching Assistant User</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> Please Ensure The Details Are Accurate</h5>
        </div>
</div>

<h1></h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @include('admin.users.partials.form',['create'=> true])
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
