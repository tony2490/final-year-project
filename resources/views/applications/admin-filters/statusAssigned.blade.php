<!-- this page allows for admins to filter through modules and status and view applications  -->
@extends('layouts.app')

@section('content')
<!-- displays the headings and subHeadings of the page  -->
<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Applications</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5>View All Teaching Assistant Applications & Update Their Status</h5>
        </div>
</div>

<!-- filter button  -->
<div class="container">                                       
    <div class="dropdown">
      <div class="filter-button">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter
      </button>
  
     <!-- drop down menu  -->
      <ul class="dropdown-menu">
        <!-- <li><a class="test a-link" tabindex="-1" href="#">Roles</a></li> -->

        <li class="dropdown-submenu">
          <a class="test a-link" tabindex="-1" href="#">Module </a>
       
          <ul class="dropdown-menu">
        
              <!-- posts the module selected into a database  -->
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


  <!-- drop down based on appliction status  -->
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
<div class="table-responsive">
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">#Id</th>
            <th scope="col">Role</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

        @foreach($applications as $application)
      <?php
         // display all the applications if it meets the following conditions display
     if($application->status == "Assigned") :?>

      <tr>
          <th scope="row"> {{$application->id}} </th>
          <td> {{$application->role}} </td>
          <td> {{$application->name}} </td>
          <td> {{$application->status}} </td>
          <td>
              <a class="btn btn-sm btn-primary" href="{{route('applications.edit',$application->id)}}" role="button"> Update </a>
          </td>
        </tr>
        <?php endif; ?>
      @endforeach
        
        
        </tbody>
      </table>
  </div>
    <!-- links to view other page  -->
      {{$applications->links()}}


</div>
@endsection






