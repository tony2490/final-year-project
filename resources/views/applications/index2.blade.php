<div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Applications</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> View All Teaching Assistant Applications & Update Their Status </h5>
        </div>

</div>
@include('layouts.filter')

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

                <tr>
                    <th scope="row"> {{$application->id}} </th>
                    <td> {{$application->role}} </td>
                    <td> {{$application->name}} </td>
                    <td> {{$application->status}} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('applications.edit',$application->id)}}" role="button"> Update </a>
                    </td>
                  </tr>

                @endforeach
            
        
            </tbody>
          </table>
</div>
          {{$applications->links()}}


    </div>
    <div  class="home-footer-padding"></div>
    @include('layouts.footer')
