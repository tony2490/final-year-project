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
        
          <form action="/jobs/moduleCode" method="POST">
            @csrf

            <li>
        
              @foreach($jobs as $job)
              
              <input class="dropdown-item" type="submit" name="filteredModuleCode" id="filteredModuleCode" value="{{$job->moduleCode}}">

              @endforeach

            </li>

          </form>
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




