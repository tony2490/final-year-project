@extends('layouts.app')
@section('content')


  <div class="container">                                       
    <div class="dropdown">
      <div class="filter-button">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter
      </button>
  
  
      <ul class="dropdown-menu">
        <!-- <li><a class="test a-link" tabindex="-1" href="#">Roles</a></li> -->

        <li class="dropdown-submenu">
          <a class="test a-link" tabindex="-1" href="#">Module </a>
       
          <ul class="dropdown-menu">
        
          <form action="/applications/moduleCode" method="POST">
            @csrf

            <li>
        
              @foreach($jobs as $job)
              
              <input class="dropdown-item" type="submit" name="filteredModuleCode" id="filteredModuleCode" value="{{$job->moduleCode}}">

              @endforeach

            </li>

          </form>
          </ul>
        </li>



        <li class="dropdown-submenu">
          <a class="test a-link" tabindex="-1" href="#">Status </a>
  
          <ul class="dropdown-menu">
       

          <li><a href="/applications/assigned"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">   Status: Assigned</button>
            </button></a> </li>
            
            <li><a href="/applications/Accepted"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">   Status: Accepted</button>
            </button></a> </li>

            <li><a href="/applications/underReview"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">Status: Under Review</button>
            </button></a> </li>

            <li><a href="/applications/offered"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">Status: Offered</button>
            </button></a></li>

            <li><a href="/applications/unsuccessful"><button class="dropdown-item" type="button">
              <button class="dropdown-item" type="button">Status: Unsuccessful</button>
              </button></a></li>


              <li><a href="/applications/withdrawn"><button class="dropdown-item" type="button">
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




