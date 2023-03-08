<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">SEEN Applications</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5>View All Teaching Assistant Applications & Update Their Status</h5>
        </div>
</div>

@include('layouts.studentFilters')

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

        @foreach($myApplications as $myApplication)
      <?php
  if($myApplication->status == "Under Review") :?>

      <tr>
          <th scope="row"> {{$myApplication->id}} </th>
          <td> {{$myApplication->role}} </td>
          <td> {{$myApplication->name}} </td>
          <td> {{$myApplication->status}} </td>

          
        </tr>
        <?php endif; ?>
      @endforeach
        
        
        </tbody>
      </table>
      {{$applications->links()}}


</div>







