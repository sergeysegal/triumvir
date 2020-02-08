<?php

?>

@extends('layouts.default')

@section('pageTitle', 'About Us')

@section('content')
    <!--**************Modals*********************************-->
    <div class="container">
        <!--Roy Modal -->
        <div class="modal fade" id="royModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid" src="{{asset('images/logo1-small.jpg')}}" alt="team member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="img-fluid" src="{{asset('images/team/roy-800x600.jpg')}}" alt="team member">
                                <p class="font-weight-bold mt-2 mb-1">Roy (Deuce)</p>
                                <p>Chief Executive Officer</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="float-right">Roy (Deuce) Andermann Jr holds MS degrees in both Chemical Engineering and Biological Sciences. He has three years of experience working as a subject matter expert on regulatory law in the crude refining sector.  Most recently he has served in a private consulting role, offering regulatory permitting, reporting, process improvement, project management, and personnel training services to multinational clients in the petrochemical industry. In 2018, Deuce placed 1st in the United States and 4th globally in the Corporate Finance Institute’s Global Financial Modeling Competition.
                                </p>
                            </div>
                        </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Roy Modal End -->
        <!--Sergey Modal -->
        <div class="modal fade" id="sergeyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid" src="{{asset('images/logo1-small.jpg')}}" alt="team member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid" src="{{asset('images/team/sergey-800x600.jpg')}}" alt="team member">
                                    <p class="font-weight-bold mt-2 mb-1">Sergey</p>
                                    <p>Chief Technology Officer</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="float-right">Sergey Segal has over nine years of software engineering and management experience in both startups and large corporations. He holds an MS in Biomedical Engineering from the University of Wisconsin-Madison, where he also taught Mathematics and Chemistry during his graduate studies. Some of Sergey’s past work experience includes applying algorithms to eliminate artifacts from radiographic imaging modalities; building scalable, data-driven applications for the financial and marketing industries; and developing vision testing software pharmaceutical companies to test drug efficacy.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Sergey Modal End -->
        <!--Vladimir Modal -->
        <div class="modal fade" id="vladimirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid" src="{{asset('images/logo1-small.jpg')}}" alt="team member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid" src="{{asset('images/team/vlad-800x600.jpg')}}" alt="team member">
                                    <p class="font-weight-bold mt-2 mb-1">Vladimir</p>
                                    <p>Advisor</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="float-right">Vladimir Skavysh is a data scientist, scientific programmer, and theoretical physicist. After a short foray (and 5 publications) into physics, Vladimir joined the machine learning revolution which is now sweeping the world. In his current job at the Bank of Canada, Vladimir does deep learning with big data, such as TransUnion credit data, to improve Bank of Canada’s forecasting and stress testing abilities. In his spare time, Vladimir enjoys playing the piano and designing reinforcement learning algorithms for playing board games.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Vladimir Modal End -->
        <!--David Modal -->
        <div class="modal fade" id="davidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid" src="{{asset('images/logo1-small.jpg')}}" alt="team member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid" src="{{asset('images/team/dave-800x600.jpg')}}" alt="team member">
                                    <p class="font-weight-bold mt-2 mb-1">David</p>
                                    <p>Advisor</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="float-right">David Simpson is a collaborative technology business builder, passionate individual revenue generator and strong business development and sales team leader with an impressive track record launching and helping accelerate innovative, disruptive, early and growth stage technology companies. David builds teams and coaches direct reports and global teammates to reach their highest potential.  He has worked across a wide range of verticals including Logistics & Supply Chain.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--David Modal End -->
        <!--Sasha D Modal -->
        <div class="modal fade" id="sashaDModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid" src="{{asset('images/logo1-small.jpg')}}" alt="team member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid" src="{{asset('images/team/sasha-800x600.jpg')}}" alt="team member">
                                    <p class="font-weight-bold mt-2 mb-1">Sasha</p>
                                    <p>Advisor</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="float-right">Sasha Davenport is a computational neuroscientist and entrepreneur. While pursuing her PhD and MBA, she has been a founder, or founding member of startups that have raised over $15 million dollars in pre-seed or series A funding.  Her teams have been awarded grants from the National Science Foundation and DARPA amounting to over $1 million dollars to research cognition, innovative database development, and machine learning with big data. Sasha's peer reviewed publications surround neuropsychological assessments, ethics, deep learning, AI, and the development of predictive models to identify criminal recidivists.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Sasha D Modal End -->
        <!--James Modal -->
        <div class="modal fade" id="jamesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid" src="{{asset('images/logo1-small.jpg')}}" alt="team member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid" src="{{asset('images/team/james-800x600.jpg')}}" alt="team member">
                                    <p class="font-weight-bold mt-2 mb-1">James</p>
                                    <p>Advisor</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="float-right">James Wolff is an attorney and entrepreneur, developing a corporate portfolio of innovative and cutting edge startup companies including 3D printing technology, robotics, commercial space, and more. He is a graduate of Johns Hopkins and New York Law School. James's portfolio includes co-founding companies such as Deep Space Industries; Space Initiatives; United Frontiers; and Immortal Data, where he serves as Chief Financial Officer.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--James Modal End -->
        <!--Sasha G Modal -->
        <div class="modal fade" id="sashaGModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid" src="{{asset('images/logo1-small.jpg')}}" alt="team member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid" src="{{asset('images/team/sasha_g-800x600.jpg')}}" alt="team member">
                                    <p class="font-weight-bold mt-2 mb-1">Sasha</p>
                                    <p>Advisor</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="float-right">
                                        Sasha Gutfraind is an AI Data Scientist with extensive experience in machine learning and predictive modeling. He holds a PhD degree in Applied Mathematics from Cornell University as well as 5 patents. Some of his work experience includes developing simulation software for epidemiology of Hepatitis C viruses (FDA) and implementing security algorithms (Los Alamos National Lab). Sasha also has substantial business experience, having founded a startup in the past.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Sasha G Modal End -->
        <!--Denis Modal -->
        <div class="modal fade" id="denisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img class="img-fluid" src="{{asset('images/logo1-small.jpg')}}" alt="team member"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid" src="{{asset('images/team/denis-800x600.jpg')}}" alt="team member">
                                    <p class="font-weight-bold mt-2 mb-1">Denis Santelli</p>
                                    <p>Advisor</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="float-right">Denis Santelli is a French Artist living in Paris. He holds a Master in Fine Arts MFA (DNSEP) from the North French Higher Art School (Ecole des Beaux-Arts). For the last 20 years, Santelli’s been experimenting with various innovative technologies related to digital art including generative art, but Denis Santelli is a classically trained artist, his primary medium was oil paint on canvas. Today he paints beginning in a 3D space using virtual reality technology but he ends on a real canvas by a real painting act.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Denis Modal End -->
    </div>
    <!--**************Modals End*********************************-->




    <div class="sergey-about-page">
        <div class="title">
            <h1>Core Team</h1>
        </div>
        <section class="team-container">
            <!--Roy -->
            <article class="team-member">
                <div class="fore-text">
                    <h1>Roy Andermann Jr <br> <span>Chief Executive Officer</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#royModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/team/roy-800x600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <!--Roy End-->
            <!--Sergey -->
            <article class="team-member">
                <div class="fore-text">
                    <h1>Sergey Segal <br> <span>Chief Technology Officer</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sergeyModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/team/sergey-800x600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <!--Sergey End-->
        </section>
        <div class="title">
            <h1>Advisory Team</h1>
        </div>
        <section class="team-container">
            <article class="team-member">
                <div class="fore-text">
                    <h1>David Simpson<br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#davidModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/team/dave-800x600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <article class="team-member">
                <div class="fore-text">
                    <h1>James Wolff <br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jamesModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/team/james-800x600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <article class="team-member">
                <div class="fore-text">
                    <h1>Sasha Davenport <br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sashaDModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/team/sasha-800x600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <article class="team-member">
                <div class="fore-text">
                    <h1>Vladimir Skavysh <br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vladimirModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/team/vlad-800x600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <article class="team-member">
                <div class="fore-text">
                    <h1>Sasha Gutfraind <br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sashaGModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/team/sasha_g-800x600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <article class="team-member">
                <div class="fore-text">
                    <h1>Denis Santelli <br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#denisModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/team/denis-800x600.jpg')}}" alt="team member" class="img-responsive">
            </article>
        </section>
    </div>
@endsection

@section('scripts')

@endsection
