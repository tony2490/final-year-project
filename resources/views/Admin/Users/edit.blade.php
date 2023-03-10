@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Edit User</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> Please Ensure You Are Changes Are Accurate</h5>
        </div>
</div>

<h1></h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                        @method('PATCH')
                        @include('admin.users.partials.form')
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
