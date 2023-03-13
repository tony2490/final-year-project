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
    @include('layouts.jobsFilter')

<div class="card">
    <table class="table">
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

        @foreach($jobs as $job)
      <?php

       if($job->moduleCode == $latestModule->filteredModuleCode)  :?>
  
      <tr>
          <th scope="row"> {{$job->id}} </th>
          <td> {{$job->moduleCode}} </td>
          <td> {{$job->hiringManager}} </td>
          <td> {{$job->jobDescription}} </td>
          <td>
                        <a class="btn btn-sm btn-primary" href="/jobs/{{$job->id}}" role="button"> View </a>

                    </td>
        
        </tr>
        <?php endif; ?>
      @endforeach
        
        
        </tbody>
      </table>
      {{$applications->links()}}


</div>
@include('layouts.footer')






