
<div class="wrapper job-index">
<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Applications</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> View All Your Teaching Assistant Applications & Their Status </h5>
        </div>

    </div>

    @include('layouts.studentFilters')


    <div class="card">

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
          {{$applications->links()}}
 

    </div>

    @include('layouts.footer')





