<!-- this page displays students all their applications  -->
@extends('layouts.app')

@section('content')
<!-- displays the headings and subHeadings of the page  -->
<div class="wrapper job-index">
<div class="row">
        <div class="col-12">
            <div class="card-padding"></div>
          <div class="headings">
            <h1 class="headings">Applications</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> View All Your Teaching Assistant Applications & Their Status </h5>
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
          <form action="/myApplications/moduleCode" method="POST">
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


   
    <div class="table-responsive">
    <table class="table">
            <thead>
              <tr>
                <th scope="col">Application Id</th>
                <th scope="col">Module</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
             
              </tr>
            </thead>
            <tbody>
                @foreach($myApplications as $myApplication)
           <!-- this table displays all applications in the database for this user -->
                <tr>
                    <th scope="row"> #{{$myApplication->id}} </th>
                    <td> {{$myApplication->role}} </td>
                    <td> {{$myApplication->name}} </td>
                    <td> {{$myApplication->status}} </td>
                    

                    <?php if($myApplication->status == "Offered") : ?>
                    
                      <td>
                    <a class="btn btn-sm btn-primary" href="{{route('applications.userResponse',$myApplication->id)}}" role="button"> Respond </a>
                    </td>
                    <?php endif; ?>

                  </tr>

                @endforeach
            
            
            </tbody>
          </table>
        </div>
            <!-- links to view other page  -->
          {{$applications->links()}}
 

    </div>
    <div  class="home-footer-padding"></div>
    @include('layouts.footer')
@endsection




