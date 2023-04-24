<!-- this is the view of the home page  -->
@extends('layouts.app')
@section('content')

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/home.css" >
        <link rel="stylesheet" href="css/style.css" >
    </head>
    <body>
        <!-- her section of the home page  -->
        <div class="hero1-image">
            <div class="hero">
                <div class="hero-inner">
                <h1 style="font-size: 70px;">Aston University Teaching Assistants</h1>
                <h2>Teaching Assistant Roles for Aston Students</h2>
                <a  href="{{ route('login') }}"class="btn">Sign Up Now</a>
            </div>
            </div>
            
        </div>
        
        <div class="home-stripe">
            <h3 >Teaching Assistant Roles For Both Final Year & PhD Aston Students</h3>
        </div>

        <!-- 3 benefit cards  -->
        <div style="padding-bottom: 50px;"></div>
    <div class="container-fluid">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-4">
                   <div class="card">
                    <div style="width:100%; text-align:center">
                    <img src="/img/money.svg" alt="hourly pay"  style="width: 50%; height: 50%;"/>
                    </div>
                            <div class="card-body">
                                <h5 class="card-title benefits">Paid Hourly</h5>
                                <p class="card-text benefits">Teaching Assistant Roles are paid at an hourly rate. (Please see job description for accurate rates).</p>
                            </div>
                   </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div style="width:100%; text-align:center">
                        <img src="/img/balance.svg" alt="hourly pay"  style="width: 50%; height: 50%;"/>
                        </div>
                            <div class="card-body">
                                <h5 class="card-title benefits">Great Work-Life Balance</h5>
                                <p class="card-text benefits">With capped hours for each role, you are able to focus on your individual learning progress too!</p>
                            </div>
                    </div>
                 </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div style="width:100%; text-align:center">
                        <img src="/img/school.svg" alt="hourly pay"  style="width: 50%; height: 50%;"/>
                        </div>
                            <div class="card-body">
                                <h5 class="card-title benefits">An Invaluable Experience</h5>
                                <p class="card-text benefits">Gain an invaluable experience by becoming a teaching assistant, which can work to your advantage when applying for jobs.</p>
                            </div>
                    </div>
                 </div>
                 
                
            </div>
        </div>
        <div style="padding-bottom: 50px;"></div>

        <!-- first information section  -->

    <div class="container">
        <div class="description-container">
            <img src="https://www.aston.ac.uk/sites/default/files/2020-12/aston-our-teaching-staff-ui.jpg" alt="" class="img-responsive floating-image right">
            <h3> What Work Will I Be Doing? </h3>
            <br>
            <p>  The primary focus of this website is to assist with the allocation of part time teaching
                assistant roles to modules that are searching for additional teaching support. This therefore
                means that each module will require a teaching assistant to be able to perform different activities 
                and may require different skills. 
                <br> <br>
                <a class="btn btn-sm btn-primary" href="/jobs" role="button"> View Jobs </a>
            </p>

          
            <!-- <a href=""><button>View Jobs</button></a> -->

            <div style="padding-bottom: 50px;"></div>

            <!-- second information section  -->
            <img src="https://www.oncampus.global/ugc-1/gallery/417/417_full.jpg" alt="" class="img-responsive floating-image left">
            <h3> Why Sign Up? </h3>
            <br>
            <p>
            If you are a PhD or final year student at Aston university, signing up will allow you to
            view and apply the latest teaching assistant roles avaliable. This incredible opportunity 
            can prove to be an important experience to add to your curriculum vitae, and you may gain 
            invaluable skills.
            <br>  <br>
            <a class="btn btn-sm btn-primary" href="/register" role="button"> Sign Up </a>
            </p>

        </div>
    </div>
    <div style="padding-bottom: 100px;"></div>

    <!-- testimonials  -->
    <div class="container-fluid">
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



        
        <script src="" async defer></script>
        <div  class="home-footer-padding"></div>
    </body>
    <footer>
        @include('layouts.footer')

    </footer>
</html>

@endsection