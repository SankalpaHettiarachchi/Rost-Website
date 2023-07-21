@extends('site.layout')

@section('content')
<div class="page-wrapper">
    <!-- start of hero -->   
    <section class="hero hero-slider-wrapper hero-slider-s1">
        <div class="hero-slider">
            <div class="slide">
                <img src="{{ asset('asset/images/slider/slide-1.jpg') }}" alt='' class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-md-offset-1 slide-caption">
                            <span class="trending"><i class="fa fa-bolt" aria-hidden="true"></i> Trending</span>
                            <h1 class="slide-title">Explore the World of Robotics with Rajarata University's Faculty of Technology Robotics Society</h1>
                            <h5 class="slide-subtitle">Join Our Dynamic Robotics Society </h5>
                            <a href="#" class="theme-btn-s1">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{ asset('asset/images/slider/slide-2.jpg') }}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-md-offset-1 slide-caption">
                            <span class="trending"><i class="fa fa-bolt" aria-hidden="true"></i> Trending</span>
                            <h1 class="slide-title">Ignite Your Passion for Robotics with us</h1>
                            <h5 class="slide-subtitle">Join Our Vibrant Robotics Society for Exclusive Benefits</h5>
                            <a href="#" class="theme-btn-s1">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{ asset('asset/images/slider/slide-3.jpg') }}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-md-offset-1 slide-caption">
                            <span class="trending"><i class="fa fa-bolt" aria-hidden="true"></i> Trending</span>
                            <h1 class="slide-title">Unleash Your Potential in Robotics with Rajarata University's Robotic Society</h1>
                            <h5 class="slide-subtitle">Be a Part of Our Innovative Robotics Society</h5>
                            <a href="#" class="theme-btn-s1">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->

    <!-- start of about-us --> 
    <section class="about-us section-padding">
        <div class="container about-us">
            <div class="row">
                <div class="col col-md-6">
                    <div class="section-title-s1">
                        <span>About us</span>
                        <h2>Welcome to the ROST</h2>
                    </div>
                    <div class="about-details">
                        <p>Welcome to the official website of the student-run organization 
                            at the Faculty of Technology, Rajarata University of Sri Lanka! 
                            We are a dynamic organization guided by dedicated lecturers who 
                            share a passion for nurturing young talent in the field of robotics. 
                            Our primary goal is to empower students and provide them with 
                            valuable opportunities to build successful careers while gaining 
                            invaluable knowledge and experience. 
                        </p>
                        <p>
                            Through our regular sessions, workshops, and annual events, 
                            we strive to create a thriving community where students can 
                            explore their interests in robotics and related technologies. 
                            Our organization serves as a platform for individuals who are 
                            eager to learn, grow, and excel in this rapidly evolving field.
                        </p>
                        <h3 class="section-title-s1">Our objectives</h3>
                        <ul>
                            <li>Comprehend, create, and learn robotics</li>
                            <li>Foster creativity and expression</li>
                            <li>Promote collaboration with innovators</li>
                            <li>Encourage research and knowledge sharing</li>
                            <li>Build industry partnerships</li>
                            <li>Promote knowledge and engagemen</li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-6 about-image-col">
                    <div class="img-holder">
                        <img src="{{ asset('asset/images/about-us/img-1.jpg') }}" alt class="img img-responsive">
                        <img src="{{ asset('asset/images/about-us/img-2.jpg') }}" alt class="img img-responsive">
                        <img src="{{ asset('asset/images/about-us/img-3.jpg') }}" alt class="img img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection