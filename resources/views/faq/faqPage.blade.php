@extends('layouts.app')
@section('content')

        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Frequently Answered Questions </h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5> </h5>
        </div>

        <div style="padding-top: 40px;"></div>


<div class="infoPages">
<h4>Why was this website created?</h4>

<p>
  This website was created to allow PhD and final year Aston university students to apply for part time 
  teaching assistants roles in a range of different modules with ease.
</p>


  <h4>Are the teaching assistant roles paid?</h4>

  <p>
    Yes, each teaching assitant role is paid. You can see speicifc hourly rates for each role when viewing a job.
  </p>

  <h4>How long can i expect to get a response?</h4>

<p>
  We aim to respond to all applicants as soon as possible however there is not a set range of time. 
  We suggest applicants keep a close eye out for any emails from noreply@astonta.co.uk

</p>

  
</div>


<div style="padding-bottom: 80px;"></div>
@include('layouts.footer')
@endsection