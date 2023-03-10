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
                    <img class="card-img-top" src="/img/teaching.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Benefit 1</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/teaching.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Benefit 2</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/teaching.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Benefit 3</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
            <!-- <strong> <div class="underline homepage-content" ></div> </strong> -->

            <div class="home-content-left homepage-content">   

                <h2 class="content-title">What is Aston University Teaching Assistants?</h2>
                <p>This website was designed to give the opportunity for Phd & final year Aston students
                    to apply to the latest paid teaching assistant roles available at Aston Universirty. 
                    After feedback from the both staff and students we decided that it was essential 
                    to launch this website so there can be a reference point to where students can refer to, 
                    when searching for paid teaching assistant work. <br> <br>
                    
                </p>
            </div>

            <div class="home-content-right homepage-content">   
                <h2 class="content-title">What is Aston University Teaching Assistants?</h2>
                <p>This website was designed to give the opportunity for Phd & final year Aston students
                    to apply to the latest paid teaching assistant roles available at Aston Universirty. 
                    After feedback from the both staff and students we decided that it was essential 
                    to launch this website so there can be a reference point to where students can refer to, 
                    when searching for paid teaching assistant work. <br> <br>

                    <button class="faq-button" >FAQs</button>
                    
                </p>
            </div>

            <section class="home-testimonial homepage-content">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center testimonial-pos">
                        <div class="col-md-12 pt-4 d-flex justify-content-center">
                            <h3>Testimonials</h3>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <h2>Explore the students experience</h2>
                        </div>
                    </div>
                    <section class="home-testimonial-bottom">
                        <div class="container testimonial-inner">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-4 style-3">
                                    <div class="tour-item ">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                            <div class="link-position d-flex justify-content-center">Student</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 style-3">
                                    <div class="tour-item ">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                            <div class="link-position d-flex justify-content-center">Student</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 style-3">
                                    <div class="tour-item ">
                                        <div class="tour-desc bg-white">
                                            <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                            <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
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


