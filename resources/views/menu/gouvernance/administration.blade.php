@extends('layout.app')
@section('title', 'Administration')
@section('content')
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Administration</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Gouvernance</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Administration</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            {{-- ROW 1 --}}
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    {{-- CARD 1 --}}
                    <div class="icon-box icon-box-clr-1">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive"
                            alt="directeur">
                        <hr>
                        <h4 class="mb-3">SODJINOU Epiphane </h4>
                        <h4 style="color:orange">DIRECTEUR</h4>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">AGBO Maxime</h4>
                        <h4 style="color:orange">DIRECTEUR ADJOINT</h4>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">Prof. AMADOU SANNI Mouftaou</h4>
                        <h4 style="color:orange">Coordonnateur Master</h4>
                        <hr>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4>AÏZOUN D. Doris Ghislaine</h4>
                        <h4 class="mt-3" style="color:orange">SECRÉTAIRE GÉNÉRALE D'ENTITÉ</h4>
                        <hr>
                    </div>
                </div>

            </div>


            {{-- ROW 2    --}}

            <div class="row mt-5">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">AKOBA K. Julien</h4>
                        <h4 style="color:orange">CHEF DIVISION COMPTABILITÉ</h4>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-1">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">TOHOUNGBA Débora</h4>
                        <p style="color:aqua">CHEF DIVISION SCOLARITÉ</p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">IDRISSOU Sahouda</h4>
                        <p style="color:aqua">CHEF DIVISION SECRÉTARIAT ADMINISTRATIF</p>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">GBEGO Eliane</h4>
                        <p style="color:aqua">AGENT SECRÉTARIAT ADMINISTRATIF</p>
                        <hr>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">Dr KOLADJO François</h4>
                        <p style="color:aqua">Chef Département Statistique Appliquée</p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">Dr DJOHY Georges</h4>
                        <p style="color:aqua">Chef Département Planification et Suivi-Evaluation</p>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
