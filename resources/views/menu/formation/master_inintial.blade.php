@extends('layout.app')
@section('title', 'Master')
@section('content')

    {{-- SECTION-1 --}}
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Master</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Formation</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Master</li>
                </ul>
            </div>
        </div>
    </section>


    {{-- SECTION 2 --}}
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="icon-box icon-box-clr-1">
                        <a href="{{ route('menu.formation.master.un') }}">
                            <div class="icon">
                                <i class="fas fa-calculator">
                                </i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.master.un') }}">
                                Suivi-Évaluation et Management des Projets (SEMP)
                            </a>
                        </h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <a href="{{ route('menu.formation.master.deux') }}">
                            <div class="icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.master.deux') }}">
                                Système d’Information Local et Planification du Développement (SILPD)
                            </a>
                        </h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <a href="{{ route('menu.formation.master.trois') }}">
                            <div class="icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.master.trois') }}">
                                Statistique Appliquée à l’Agriculture et aux Vivants (SAAV)
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="icon-box icon-box-clr-4">
                        <a href="{{ route('menu.formation.master.quatre') }}">
                            <div class="icon">
                                <i class="fas fa-ruler-combined">
                                </i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.master.quatre') }}">
                                Statistiques Sociales et Démographiques (SSD)
                            </a>
                        </h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <a href="{{ route('menu.formation.master.cinq') }}">
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.master.cinq') }}">
                                Statistiques Économiques et Sciences Actuarielles (SESA)
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
