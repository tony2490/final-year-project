@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Teaching Assistant Vacancies</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5>Select from The Available Roles & Apply Today</h5>
        </div>
        @can('is-admin')
        <a class="btn btn-sm btn-success create" href="{{route('jobs.create')}}" style="width: 100%;" role="button"> Create</a>
        @endcan

    </div>
    
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
 

    <div class="table-responsive">
    <table class="table">
            <thead>
              <tr>
                <th scope="col">Module</th>
                <th scope="col">Hiring Manager</th>
                <th scope="col">Job Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)

                <tr>
                
                    <td> {{$job->moduleCode}} </td>
                    <td> {{$job->hiringManager}} </td>
                    <td class="textDone"> {{$job->jobDescription}} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="/jobs/{{$job->id}}" role="button"> View </a>

                    </td>
                  </tr>

            </tbody>
            @endforeach
          </table>
          </div>
          {{$jobs->links()}}


    </div>
</div>


    </div>
    <div  class="home-footer-padding"></div>
    @include('layouts.footer')
@endsection


