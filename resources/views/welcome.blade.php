@extends('layouts.app')
@section('content')

    <head>
       <link rel="stylesheet" href="css/style.css" >
    </head>

    <body class="home-page">
        <section class="hero">
            <div class="hero-inner">
                <h1>Aston University Teaching Assistants</h1>
                <h2>Teaching Assistant Roles for Aston Students</h2>
                <a  href="{{ route('login') }}"class="btn">Sign Up Now</a>
            </div>
        </section>
        <div class="home-stripe">
            <h3 >Teaching Assistant Roles For Both Final Year & PHD Aston Students</h3>
        </div>
        
        <div class="homepage-content">
            <div class="card-group homepage-content">
                <div class="card">
                    <img class="card-img-top" src="/img/money.svg" alt="hourly pay">
                    <div class="card-body">
                        <h5 class="card-title">Paid Hourly</h5>
                        <p class="card-text">Teaching Assistant Roles are paid at an hourly rate. (Please see job description for accurate rates).</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/school.svg" alt="invaluable experience">
                    <div class="card-body">
                    <h5 class="card-title">An Invaluable Experience</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/balance.svg" alt="balance work and studies">
                    <div class="card-body">
                    <h5 class="card-title">Great Work-Life Balance</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
            <!-- <strong> <div class="underline homepage-content" ></div> </strong> -->

            <div class="homepage-cards-content homepage-p">
                <p> <img src="/img/teaching.jpg" class="img-to-right " alt="" >

                <h2 class="content-title">What is Aston University Teaching Assistants?</h2> <br>
                    <p>This website was designed to give the opportunity for Phd & final year Aston students
                        to apply to the latest paid teaching assistant roles available at Aston Universirty. 
                        After feedback from the both staff and students we decided that it was essential 
                        to launch this website so there can be a reference point for students to go to, 
                        when searching for paid teaching assistant work. <br> <br>


                </p>
            </div>

            <div style="padding-top: 80px;"></div>

            <div class="homepage-cards-content homepage-p">
                <p> <img src="/img/teaching.jpg" class="img-to-left " alt="" >

                <h2 class="content-title">What Kind Of Work Will I Be Doing?</h2> <br>
                    <p">
                    The primary focus of this website is to assist with the allocation of part time teaching
                    assistant roles to modules that are searching for additional teaching support. This therfore
                    means that each module will require a taeching assistant to be able to different things 
                    and may require different skills. We strongly recommend that you thorougly read through 
                    each job description.  
                 <br> <br>


                </p>
            </div>

            <div style="padding-bottom: 80px;"></div>

       



    

   
   
            

            <section class="home-testimonial homepage-content">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center testimonial-pos">
                        <div class="col-md-12 pt-4 d-flex justify-content-center">
                            <h3>Testimonials</h3>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <h2>The Teaching Assistant Experience </h2>
                        </div>
                    </div>
                    <section class="home-testimonial-bottom">
                        <div class="container testimonial-inner">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-4 style-3">
                                    <div class="tour-item ">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo;  Working as a part time teaching assistant allowed me to improve my communication skills and be able to help others! &rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="/img/person.svg"  alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Jonothan Davies</div>
                                            <div class="link-position d-flex justify-content-center">Student</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 style-3">
                                    <div class="tour-item ">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo; With this teaching assistant role now on my cv I have been able to showcase my experiences and have been offered a graduate role! &rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"src="/img/person.svg" alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Sarah Corbin</div>
                                            <div class="link-position d-flex justify-content-center">Student</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 style-3">
                                    <div class="tour-item ">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo; Working with the proffesor as a part time teaching assistant has allowed me to also build on my knowledge which has benefited me far in my final year &rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="/img/person.svg" alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Lisa White</div>
                                            <div class="link-position d-flex justify-content-center">Student</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
            </section>
            

        </div>

        <div  class="home-footer-padding"></div>

    </body>
@include('layouts.footer')


@endsection


