@extends('layouts.app')
@section('content')

  <div class="container">                                       
    <div class="dropdown">
      <div class="filter-button">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter
      </button>
  
  
      <ul class="dropdown-menu">
        <li><a class="test a-link" tabindex="-1" href="#">Roles</a></li>

       

        <li class="dropdown-submenu">
          <a class="test a-link" tabindex="-1" href="#">Module </a>
          @foreach($jobs as $job)
          <ul class="dropdown-menu">
        

            <li><a href="/myApplications/moduleCode"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">  Module: {{$job->moduleCode}} </button>
            </button></a> </li>

          
          </ul>
        </li>
        @endforeach


        <li class="dropdown-submenu">
          <a class="test a-link" tabindex="-1" href="#">Status </a>
  
          <ul class="dropdown-menu">
       

            <li><a href="/myApplications/Accepted"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">   Status: Accepted</button>
            </button></a> </li>

            <li><a href="/myApplications/assigned"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">   Status: Assigned</button>
            </button></a> </li>

            <li><a href="/myApplications/underReview"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">Status: Under Review</button>
            </button></a> </li>

            <li><a href="/myApplications/offered"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">Status: Offered</button>
            </button></a></li>

            <li><a href="/myApplications/unsuccessful"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">Status: Unsuccessful</button>
              </button></a></li>


              <li><a href="/myApplications/withdrawn"><button class="dropdown-item" type="button">
                <button class="dropdown-item" type="button">Status: Withdrawn</button>
                </button></a> </li>

          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
  
  <script>
  $(document).ready(function(){
    $('.dropdown-submenu a.test').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });
  </script>
  
  </body>
 

@endsection




