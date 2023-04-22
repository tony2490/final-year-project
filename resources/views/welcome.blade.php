@extends('layouts.app')
@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="css/style.css" >
    </head>

    <body class="home-page">
        <div class="main-content">
        <section class="hero">
            <div class="hero-inner">
                <h1>Aston University Teaching Assistants</h1>
                <h2>Teaching Assistant Roles for Aston Students</h2>
                <a  href="{{ route('login') }}"class="btn">Sign Up Now</a>
            </div>
        </section>
        <div class="home-stripe">
            <h3 >Teaching Assistant Roles For Both Final Year & PhD Aston Students</h3>
        </div>
        
        <div class="homepage-content">
            <div class="card-group homepage-content container-fluid">
                <div class="card card-responsive col-sm-6 col-md-4 col-lg-4 ">
                    <img class="card-img-top" src="/img/money.svg" alt="hourly pay">
                    <div class="card-body">
                        <h5 class="card-title">Paid Hourly</h5>
                        <p class="card-text">Teaching Assistant Roles are paid at an hourly rate. (Please see job description for accurate rates).</p>
                    </div>
                </div>
                <div class="card card-responsive col-sm-6 col-md-4 col-lg-34">                    <img class="card-img-top" src="/img/school.svg" alt="invaluable experience">
                    <div class="card-body">
                    <h5 class="card-title">An Invaluable Experience</h5>
                    <p class="card-text">Gain an invaluable experience which can work to your advantage when applying for jobs</p>
                    </div>
                </div>
                <div class="card card-responsive col-sm-6 col-md-4 col-lg-4 ">                    <img class="card-img-top" src="/img/balance.svg" alt="balance work and studies">
                    <div class="card-body">
                    <h5 class="card-title">Great Work-Life Balance</h5>
                    <p class="card-text">With capped hours for each role, you are able to focus on your individual learning progress too!</p>
                    </div>
                </div>
            </div>
            <!-- <strong> <div class="underline homepage-content" ></div> </strong> -->

            <div class="homepage-cards-content homepage-p container-fluid">
                <p> <img src="https://www.aston.ac.uk/sites/default/files/2020-12/aston-our-teaching-staff-ui.jpg" class="img-to-right " alt="" width="600" height="300" >

                     <h2 class="content-title">What Work Will I Be Doing?</h2> <br>
                    <p">
                    The primary focus of this website is to assist with the allocation of part time teaching
                    assistant roles to modules that are searching for additional teaching support. This therefore
                    means that each module will require a teaching assistant to be able to different activities 
                    and may require different skills.
                 <br> <br>
                 <a class="btn btn-sm btn-primary" href="/jobs" role="button"> View Jobs </a>


                </p>
            </div>

            <div style="padding-top: 80px;"></div>

            <div class="homepage-cards-content homepage-p">
                <p> <img src="https://www.oncampus.global/ugc-1/gallery/417/417_full.jpg" class="img-to-left " alt="" width="600" height="300">

                <h2 class="content-title">Why Sign Up?</h2> <br>
                    <p">
                        If you are a PhD or final year student at Aston university, signing up will allow you to
                        view and apply the latest teaching assistant roles avaliable. This incredible opportunity 
                        can prove to be an important experience to add to your curriculum vitae, and you may gain 
                        invaluable skills.
           

                
                 <br> <br>
                 <a class="btn btn-sm btn-primary" href="/register" role="button"> Sign Up </a>


                </p>
            </div>

            <div style="padding-bottom: 130px;"></div>

        <!-- Testimonials -->
            
            <section class="home-testimonial homepage-content container-fluid">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center testimonial-pos">
                        <div class="col-md-12 pt-4 d-flex justify-content-center">
                            <h3>Testimonials</h3>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <h2>The Teaching Assistant Experience</h2>
                        </div>
                    </div>
                    <section class="home-testimonial-bottom">
                        <div class="container testimonial-inner">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-4 style-3">
                                    <div class="tour-item">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo; Working as a part-time teaching assistant allowed me to improve my communication skills and be able to help others! &rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="/img/person.svg" alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Jonothan Davies</div>
                                            <div class="link-position d-flex justify-content-center">Student</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 style-3">
                                    <div class="tour-item">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo; With this teaching assistant role now on my CV, I have been able to showcase my experiences and have been offered a graduate role! &rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"src="/img/person.svg" alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Sarah Corbin</div>
                                            <div class="link-position d-flex justify-content-center">Student</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 style-3">
                                    <div class="tour-item">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo; Working with the professor as a part-time teaching assistant has allowed me to also build on my knowledge, which has benefited me so far in my final year &rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="/img/person.svg" alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Lisa White</div>
                                            <div class="link-position d-flex justify-content-center">Student</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            
            
            

        </div>

        <div  class="home-footer-padding"></div>
</div>
    </body>
    <footer>
        @include('layouts.footer')

    </footer>


@endsection


