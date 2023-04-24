<!-- this page displays all the modules based on the one selects allows for admins to filter through modules and status and view applications  -->

@extends('layouts.app')
@section('content')
<!-- displays the headings and subHeadings of the page  -->
<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Teaching Assistant Vacancies</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5>Select from The Available Roles & Apply Today</h5>
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
 

    <div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#Id</th>
            <th scope="col">Role</th>
            <th scope="col">Hiring Manager</th>
            <th scope="col">Job Description</th>
            <th scope="col">Actions</th>
            
          </tr>
        </thead>
        <tbody>

        @foreach($jobs as $job)
        
      <?php
         // if the module code that was filtered is  == to the application role display the details

       if($job->moduleCode == $latestModule->filteredModuleCode)  :?>
  
      <tr>
          <th scope="row"> {{$job->id}} </th>
          <td> {{$job->moduleCode}} </td>
          <td> {{$job->hiringManager}} </td>
          <td class="textDone"> {{$job->jobDescription}} </td>
          <td>
                        <a class="btn btn-sm btn-primary" href="/jobs/{{$job->id}}" role="button"> View </a>

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
@include('layouts.footer')
@endsection





