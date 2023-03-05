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
            <h3 class="home-stripe ">Teaching Assitant Roles For Both Final Year & PHD Aston Students</h3>
        </div>

            <div class="card-group">
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

            <h2>What is Aston University Teaching Assistants?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem libero, ultrices in faucibus sit amet, finibus ut lacus. Cras viverra accumsan ex non ultricies. Ut orci neque, 
                dictum a sollicitudin eget, lacinia vitae felis. Etiam a nisi tortor. Proin mollis venenatis purus, ut convallis lectus commodo ac. Donec luctus sit amet elit et egestas. Donec nec neque a odio vulputate ornare nec nec lacus. Cras dictum eleifend hendrerit. Suspendisse ut justo et metus commodo ultricies.</p>

    

    </body>
@endsection


