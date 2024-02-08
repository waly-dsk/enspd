@extends('layout.app')
@section('title', 'Accueil')
@section('content')
    <section class="services-w3l-block py-5 w3l-banner" id="features">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                {{-- <h3 class="title-style">Achieve Your Goals With Edu School</h3> --}}
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="welcomelogo icon-box-clr-1">
                        <img src="{{ asset('assets/images/logo_logo-enspd_91973.jpg') }}" class="rounded-pill"
                            alt="logo_enspd" width="200" height="200">
                        <h4 class="title mt-3">
                            <a href="#">
                                ÉCOLE NATIONALE DE
                                <span style="font-weight: bold; color: orange">STATISTIQUE</span>, DE
                                <span style="font-weight: bold; color: orange">PLANIFICATION</span> ET DE
                                <span style="font-weight: bold; color: orange">DÉMOGRAPHIE</span>
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div style="text-align: center; font-weight: bold">
                        <h4 class="title mt-4">
                            <a href="#">
                            </a>
                        </h4>
                    </div>
                    {{-- <div class="position-relative mt-5">
                        <img src="{{ asset('assets/images/welcome.png') }}" alt="image1" class="img-fluid radius-image">
                    </div> --}}

                </div>
                <div class="col-md-6 col-lg-3 align-items-stretch mt-lg-0 mt-4">
                    <div class="welcomelogo icon-box-clr-4">
                        <img src="{{ asset('assets/images/logo_université_de_parakou.jpg') }}" class="rounded-pill"
                            alt="universite" width="200" height="200">
                        <h4 class="title mt-3">
                            <a href="#">
                                UNIVERSITE DE
                                <span style="font-weight: bold; color: orange">PARAKOU</span>
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
