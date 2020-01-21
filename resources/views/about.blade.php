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
                                <img class="img-fluid" src="{{asset('images/roy-800x600.jpg')}}" alt="team member">
                                <p class="font-weight-bold mt-2 mb-1">Roy (Deuce)</p>
                                <p>Chief Executive Officer</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="float-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci assumenda, commodi, dolorem enim eum explicabo fuga fugit, libero modi nulla placeat quia sapiente sequi similique sint sit vel. Ad eaque incidunt quia vel veniam. Accusamus aliquid debitis esse, est, harum impedit magni modi natus sapiente similique, sunt tenetur veniam.
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
                                    <img class="img-fluid" src="{{asset('images/sergey-800x600.jpg')}}" alt="team member">
                                    <p class="font-weight-bold mt-2 mb-1">Sergey</p>
                                    <p>Chief Technology Officer</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="float-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci assumenda, commodi, dolorem enim eum explicabo fuga fugit, libero modi nulla placeat quia sapiente sequi similique sint sit vel. Ad eaque incidunt quia vel veniam. Accusamus aliquid debitis esse, est, harum impedit magni modi natus sapiente similique, sunt tenetur veniam.
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
                <img src="{{asset('images/roy-800x600.jpg')}}" alt="team member" class="img-responsive">
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
                <img src="{{asset('images/sergey-800x600.jpg')}}" alt="team member" class="img-responsive">
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sergeyModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <article class="team-member">
                <div class="fore-text">
                    <h1>James Anthony Wolff <br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sergeyModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <article class="team-member">
                <div class="fore-text">
                    <h1>Sasha Davenport <br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sergeyModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="team member" class="img-responsive">
            </article>
            <article class="team-member">
                <div class="fore-text">
                    <h1>Sasha Davenport <br> <span>Advisor</span></h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sergeyModal">
                        Read Bio
                    </button>
                </div>
                <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="team member" class="img-responsive">
            </article>
        </section>
    </div>





@endsection

@section('scripts')

@endsection
