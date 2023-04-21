@extends('layouts.app')

@section('content')
    <div class="wrapper job-index">
    <div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Platform Users</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> Create, Edit & Delete User Accounts On The Platform.</h5>
        </div>


          
                    <a class="btn btn-sm btn-success create" href="{{route('admin.users.create')}}" role="button" style="width: 100%;"> Create</a>
           
        </div>

        


 

        <div class="table-responsive">
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)

                    <tr>
                        <th scope="row"> {{$user->id}} </th>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{route('admin.users.edit',$user->id)}}" role="button"> Edit </a>

                            <button class="btn btn-sm btn-danger" type="button" 
                            onclick="event.preventDefault();
                            document.getElementById('delete-user-form-{{$user->id}}').submit()">
                                Delete
                            </button>
                            <form id="delete-user-form-{{$user->id}}" action="{{route('admin.users.destroy' ,$user->id)}}" method="POST" style="display:none">
                                @csrf
                                @method("DELETE")

                            </form>
                        </td>
                      </tr>

                    @endforeach
                
                
                </tbody>
              </table>
</div>
              {{$users->links()}}


        </div>
</div>
<div  class="home-footer-padding"></div>
@include('layouts.footer')
@endsection

