@extends('layout.app')
@section('title', 'Laboratoire')
@section('content')
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Laboratoire</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Recherche</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Laboratoire</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-1">
                        <div class="icon">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            Deux laboratoires de recherche ont été conçus et formellement créés par des arrêtés rectoraux :
                            <span style="font-weight: bold; color:orange">LaReSPD</span> et <span
                                style="font-weight: bold; color:orange">ODeSPoL</span> .
                            <br>
                            <span class="offset-1">•</span> Le Laboratoire de recherche en science de
                            la population et du développement (LaReSPD) par arrêté rectoral N°2335-2014/R-UP/VR-AARU du
                            09 décembre 2014.
                        </p>
                        <hr>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><i class="fas fa-arrow-alt-circle-left"></i></div>
                        <hr>
                        <p style="text-align: justify">
                            <span class="offset-1">•</span> L’Observatoire démographique et statistique des populations
                            locales (ODeSPoL) par arrêté
                            rectoral N°2015-1889/R-UP/VR-AARU/SG/SA du 12 août 2015. Il est la structure de l’ENSPD destinée
                            à la mise en œuvre des opérations de collecte et de confection des bases de données. Ces données
                            sont associées aux projets/programmes de recherches opérationnelles, fondamentales et doctorales
                            du LaReSPD3.
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
