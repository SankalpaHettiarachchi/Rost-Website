@extends('site.layout')

@section('content')
    <div class="page-wrapper">
        <!-- start page-title-wrapper -->
        <div class="page-title">
            <div class="container">
                <h1>About Us</h1>
            </div>
        </div>
        <!-- end page-title-wrapper -->

        <!-- start page title bottom menu -->
        <div class="pg-title-btm-menu">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <ul>
                            <li id="btnoverview" class="current" data-section="overview" onclick="toggleSection(this)" ><a href="#" onclick="event.preventDefault();">Overview</a></li>
                            <li id="btnteam" data-section="team" onclick="toggleSection(this)"><a href="#" onclick="event.preventDefault();">Team</a></li>
                            <li id="btnmision" data-section="mission" onclick="toggleSection(this)"><a href="#" onclick="event.preventDefault();">Mission</a></li>
                            <li id="btnvision" data-section="vision" onclick="toggleSection(this)"><a href="#" onclick="event.preventDefault();">Vision</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- start page title bottom menu -->

        <!-- start of overview-section --> 
        <section  id="overview" class="overview-section" >
            <div class="container">
                <div class="container about-us section-padding">
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="service-details">
                                <div class="container">
                                    <div class="row">
                                        <h2 class="fnt">Overview</h2>
                                        <br>
                                        <div class="col col-sm-6">
                                            <p>Welcome to the Robotic Association of the Faculty of Technology, Rajarata University of Sri Lanka!. 
                                                We offer exciting membership opportunities for undergraduate students interested in robotics 
                                                and technology.
                                            </p>
                                            <p>Through our regular sessions, workshops, and annual events, we strive to create a thriving 
                                                community where students can explore their interests in robotics and related technologies. 
                                                Our organization serves as a platform for individuals who are eager to learn, grow, and excel 
                                                in this rapidly evolving field.
                                            </p>
                                        </div>
                                        <div class="col col-sm-6">
                                            <img src="{{ asset('asset/images/about/overview.jpg') }}" alt class="img img-responsive about-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <h3>Our Objectives</h3>
                                        <div class="col col-sm-6">
                                            <p>
                                                <ul>
                                                    <li><i class="fa fa-chevron-circle-right"></i> Comprehend, create, and learn robotics</li>
                                                    <li><i class="fa fa-chevron-circle-right"></i> Foster creativity and expression</li>
                                                    <li><i class="fa fa-chevron-circle-right"></i> Promote collaboration with innovators</li>
                                                    <li><i class="fa fa-chevron-circle-right"></i> Encourage research and knowledge sharing</li>
                                                    <li><i class="fa fa-chevron-circle-right"></i> Build industry partnerships</li>
                                                    <li><i class="fa fa-chevron-circle-right"></i> Promote knowledge and engagemen</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group faq-accordion theme-accordion-s2 " id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Membership Eligibility</a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>
                                    All undergraduate students enrolled in the Faculty of Technology are 
                                    eligible to apply for membership in our organization.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Membership Benefits</a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>All active and accepted members will receive an ID card, providing 
                                    identification wherever necessary. Junior members will be issued a valid ID card for one year.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Appointment Process</a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>All positions within the society will be filled through formal meetings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Term Duration</a>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>The duration of all positions will be limited to one year.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- end of overview-section --> 
        
        <!-- start of vision-section -->
        <section style="display: none;" id="vision" class="overview-section" >
            <div class="container">
                <div class="container about-us section-padding">
                    <div class="row">
                        <div class="col col-md-6">
                                <h2 class="fnt">Our Vision</h2>
                                <br>
                            <div class="card">
                                <div class="card-body">
                                <p class="card-text">
                                    <span class="quote-mark ">"  </span>  To be a competitor in the robotics and 
                                    artificial intelligence world.
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 about-image-col">
                            <img src="{{ asset('asset/images/about/vision.jpg') }}" alt class="img img-responsive about-img">
                        </div>
                    </div>
                </div>
        </section>       

        <!-- start of mission-section -->
        <section style="display: none;" id="mission" class="overview-section" >
            <div class="container">
                <div class="container about-us section-padding">
                    <div class="row">
                        <div class="col col-md-6">
                            <h2 class="fnt">Our Mission</h2>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                <p class="card-text">
                                    <span class="quote-mark ">"</span> To inspire minds to be engaging with 
                                    mentor based programs that develop creativity, technical skills 
                                    including self-confidence, communication and leadership to interfere 
                                    with real world.
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <img src="{{ asset('asset/images/about/mission.jpg') }}" alt class="img img-responsive about-img">
                        </div>
                    </div>
                </div>
        </section>   
        <!-- end of mission-section -->

        <!-- start of team-section --> 
        <section id="team" style ="display: none;" class="team-section overview-section">
            <div class="container">
                <div class="container about-us section-padding">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2 class="fnt">Our Team</h2>
                            <div class="team-tab">
                                <ul class="tablist">
                                    <li class="active">
                                        <a href="#officials" aria-controls="officials" data-toggle="tab"><h3 class="fnt">Board of Official</h3></a>
                                    </li>
                                    <li>
                                        <a href="#advisors" aria-controls="managers" data-toggle="tab"><h3 class="fnt">Our Advisors</h3></a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="officials">
                                        <div class="team-members">
                                            <div class="member">
                                                <div class="inner">
                                                    <div class="member-pic">
                                                        <img src="{{ asset('asset/images/team/president.jpg') }}" alt class="img img-responsive">
                                                    </div>
                                                    <div class="member-details">
                                                        <div class="info">
                                                            <h3>Mr. Mohamed Humaidh</h3>
                                                            <span class="post">President</span>
                                                        </div>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member">
                                                <div class="inner">
                                                    <div class="member-pic">
                                                        <img src="{{ asset('asset/images/team/technical_lead.jpg') }}" alt class="img img-responsive">
                                                    </div>
                                                    <div class="member-details">
                                                        <div class="info">
                                                            <h3>Mr. Avishka Udara</h3>
                                                            <span class="post">Technical Lead</span>
                                                        </div>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member">
                                                <div class="inner">
                                                    <div class="member-pic">
                                                        <img src="{{ asset('asset/images/team/vice_president.jpg') }}" alt class="img img-responsive">
                                                    </div>
                                                    <div class="member-details">
                                                        <div class="info">
                                                            <h3>Ms. Gayani Nadessha</h3>
                                                            <span class="post">Vice President</span>
                                                        </div>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member">
                                                <div class="inner">
                                                    <div class="member-pic">
                                                        <img src="{{ asset('asset/images/team/junior_editor.jpg') }}" alt class="img img-responsive">
                                                    </div>
                                                    <div class="member-details">
                                                        <div class="info">
                                                            <h3>Mr. Nipun Dilshan</h3>
                                                            <span class="post">Editor</span>
                                                        </div>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member">
                                                <div class="inner">
                                                    <div class="member-pic">
                                                        <img src="{{ asset('asset/images/team/Event_organizer.jpg') }}" alt class="img img-responsive">
                                                    </div>
                                                    <div class="member-details">
                                                        <div class="info">
                                                            <h3>Mr. Dileesha Lakshan</h3>
                                                            <span class="post">Event Organizer</span>
                                                        </div>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member">
                                                <div class="inner">
                                                    <div class="member-pic">
                                                        <img src="{{ asset('asset/images/team/media_editor.jpg') }}" alt class="img img-responsive">
                                                    </div>
                                                    <div class="member-details">
                                                        <div class="info">
                                                            <h3>Mr. Dinuja Kelum</h3>
                                                            <span class="post">Media Editor</span>
                                                        </div>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="advisors">
                                        <div class="team-members">
                                            <div class="member">
                                                <div class="inner">
                                                    <div class="member-pic">
                                                        <img src="{{ asset('asset/images/team/vector.jpg') }}" alt class="img img-responsive">
                                                    </div>
                                                    <div class="member-details">
                                                        <div class="info">
                                                            <h3>Mr. Husni Mohammed</h3>
                                                            <span class="post">Assistant Lecturer</span>
                                                        </div>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member">
                                                <div class="inner">
                                                    <div class="member-pic">
                                                        <img src="{{ asset('asset/images/team/vector.jpg') }}" alt class="img img-responsive">
                                                    </div>
                                                    <div class="member-details">
                                                        <div class="info">
                                                            <h3>Mr. Rusiru Rajakaruna</h3>
                                                            <span class="post">Lecturer</span>
                                                        </div>
                                                        <ul class="social-links">
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection