@extends('layouts.app')
@section('content')
<div class="wrapper job-index">
    <!-- <div class="row">
        <div class="col-12">
            <h1 class="float-left">Applications</h1>
        </div>
    </div> -->

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter
      </button>

      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

          <a href="/applications/statusAccepted"><button class="dropdown-item" type="button">
            Status: Accepted
          </button></a>

          <a href="/applications/underReview"><button class="dropdown-item" type="button">
            <button class="dropdown-item" type="button">Status: Under Review</button>
          </button></a>

          <a href="/applications/offered"><button class="dropdown-item" type="button">
            <button class="dropdown-item" type="button">Status: Offered</button>
          </button></a>

          <a href="/applications/unsucessful"><button class="dropdown-item" type="button">
        <button class="dropdown-item" type="button">Status: Unsuccessful</button>
        </button></a>

        <a href="/applications/withdrawn"><button class="dropdown-item" type="button">
        <button class="dropdown-item" type="button">Status: Withdrawn</button>
        </button></a>
        
      </div>
    </div>



@endsection







