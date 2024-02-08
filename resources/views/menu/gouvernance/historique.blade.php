@extends('layout.app')
@section('title', 'Historique')
@section('content')
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Historique</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Gouvernance</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Historique</li>
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
                            L’Ecole Nationale de Statistique, de Planification et de Démographie (ENSPD) est une Unité de
                            Formation et de Recherche (UFR) de l’Université de Parakou (UP) créée par arrêté
                            N°256/MESRS/CAB/DC/SGM/DRFM/ST-REGIE du 7 juin 2012. Sa création coïncide donc avec la mise en
                            œuvre de la politique de la décentralisation universitaire du régime en place. En ces temps-là,
                            au Bénin, tous les plans de développement conçus et mis en application dans les communes n’ont
                            pas porté les fruits escomptés. La raison en est qu’ils ont été élaborés sans la participation
                            des populations concernées et, surtout, en l’absence de ressources humaines compétentes et
                            d’informations ou de données statistiques susceptibles de mieux arrimer les choix stratégiques
                            aux problèmes réels de développement à régler. Il devient ainsi indispensable et urgent de
                            disposer de ressources humaines compétentes et de données statistiques pertinentes et fiables en
                            réponse aux exigences de l’environnement socioéconomique et de développement local adéquat.
                            C’est à effet que le gouvernement du Bénin a créé par l'arrêté ministériel, l’ENSPD.
                        </p>
                        <hr>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><i class="fas fa-arrow-alt-circle-left"></i></div>
                        <hr>
                        <p style="text-align: justify">
                            A ses
                            débuts, l’Ecole avait été installée sur un site sis dans la commune de Tchaourou. En novembre
                            2016, l’ENSPD est délocalisée de Tchaourou vers le campus de Parakou, à la suite de
                            l’actualisation de la carte universitaire du Bénin.
                        </p>
                        <img class="img-fluid mt-1 mb-2" src="{{ asset('assets/images/effectfenspd.png') }}" alt="effectif">
                        <caption>Évolution des Effectifs de l’École </caption>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
