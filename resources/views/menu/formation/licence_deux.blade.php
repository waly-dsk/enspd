@extends('layout.app')
@section('title', 'Formation | Planification et suivi-évaluation')
@section('content')

    {{-- SECTION-1 --}}
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Planification et suivi-évaluation</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Formation</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Planification et suivi-évaluation (PSE)</li>
                </ul>
            </div>
        </div>
    </section>


    {{-- SECTION 2 --}}
    <section class="services-w3l-block py-5">
        <div class="container py-md-5 py-4">

            {{-- ROW-0 --}}
            <div class="row mb-5">
                <div class="col-md-12 col-lg-12">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><i class="fas fa-user-md"></i></div>
                        <hr>
                        <div style="text-align: center;">
                            <p class="mt-3 mb-2 ">
                                Domaine de formation :
                                <span style="font-weight: bold;color:orange">
                                    Sciences Economiques et de Gestion
                                </span>
                            </p>
                            <p class="mt-3 mb-2 ">
                                Mention :
                                <span style="font-weight: bold;color: orange">
                                    Planification et Suivi-Evaluation
                                </span>
                            </p>
                            <p class="mt-3 mb-2 ">
                                Spécialité :
                                <span style="font-weight: bold;color: orange">
                                    Planification et Suivi-Evaluation (PSE)
                                </span>
                            </p>
                            <p class="mt-3 mb-2 ">
                                Grade :
                                <span style="font-weight: bold;color: orange">
                                    Licence
                                </span>
                            </p>
                            <p class="mt-3 mb-2 ">
                                Durée Formation :
                                <span style="font-weight: bold;color: orange">
                                    3 ans
                                </span>
                            </p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            {{-- ROW-1 --}}
            <div class="row">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-1">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Objectif Général</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            Former des techniciens supérieurs capables de : <br>
                            <span class="offset-1" style="font-weight: bold; color : orange"> (i) </span> planifier des
                            opérations (projets, programmes,
                            politiques, plans etc.), et <br>
                            <span class="offset-1" style="font-weight: bold; color : orange"> (ii) </span>
                            d’opérationnaliser des dispositifs de suivi-évaluation de
                            projets et programmes divers.
                        </p>
                        <hr>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-2">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Objectifs Spécifiques </a>
                        </div>
                        <hr>
                        <br>
                        <ul style="text-align: left" class="offset-1">
                            <li>
                                <span style="font-weight: bold; color :orange">
                                    • concevoir un dispositif de collecte de données
                                </span>
                                (élaboration de protocole d’enquête statistique, production de synthèse bibliographique,
                                réalisation d’échantillonnage, identification des sources d’information, conception d’outils
                                de collecte de données, implémentation des outils dans des applications, etc.) ;
                            </li>
                            <br>
                            <li>
                                <span style="font-weight: bold; color :orange">
                                    • choisir les logiciels et applications de gestion de bases de données
                                </span>
                                (maîtrise des logiciels courants de collecte de données, appropriation des systèmes
                                d’information, etc.) ;
                            </li>
                            <br>
                            <li>
                                <span style="font-weight: bold; color :orange">
                                    • appliquer les fondamentaux de l’analyse exploratoire et inférentielle
                                </span>
                                (application des méthodes descriptive univariée et multidimensionnelle, formulation
                                d’hypothèses, maîtrise des principes de bases d’un test statistique, réalisation des tests
                                statistiques, etc.) ;
                            </li>
                            <br>
                            <li>
                                <span style="font-weight: bold; color :orange">
                                    • réaliser des diagnostics et des analyses situationnelles
                                </span>
                                (choix des outils de diagnostic ou d’analyse adaptés à chaque situation ou contexte,
                                utilisation de bonnes sources informatives, identification des principaux problèmes de
                                développement et les causalités, les enjeux de développement dans les collectivités
                                décentralisées, cartographie des parties prenantes, etc.)
                            </li>
                            <br>
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>


            {{-- ROW 2 --}}
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-2">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Objectifs Spécifiques (Suite et Fin)</a>
                        </div>
                        <hr>
                        <br>
                        <ul style="text-align: left" class="offset-1">
                            <li>
                                <span style="font-weight: bold; color: orange">
                                    • élaborer et planifier des projets et programmes
                                </span>
                                (maîtrise des différentes étapes du cycle des projets, programmes et politiques, élaboration
                                de cadre logique de projet/programme, de tableau de bord, planification des opérations et
                                des activités/tâches de projet, élaboration de budget de projet/programme, analyse des
                                risques liés aux projets/programmes) ;
                            </li>
                            <br>
                            <li>
                                <span style="font-weight: bold; color: orange">
                                    • conduire le suivi-évaluation des projets et programmes
                                </span>
                                (conception, d’un dispositif adéquat de suivi-évaluation d’un projet/programme,
                                implémentation des outils de suivi-évaluation d’un projet/programme) ;
                            </li>
                            <br>
                            <li>
                                <span style="font-weight: bold; color: orange">
                                    • évaluer des projets et programmes
                                </span>
                                (élaboration des termes de référence pour des études et audits de projets/programmes,
                                analyse financière et économique de projet/programme, évaluation d’impacts socioéconomiques
                                de projets/programmes) ;
                            </li>
                            <br>
                            <li>
                                <span style="font-weight: bold; color :orange">
                                    • communiquer les processus et résultats de planification et de suivi-évaluation de
                                    projets et programmes
                                </span>;
                            </li>
                            <br>
                        </ul>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-3">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Profils d'entrée</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            L’admission en Licence PSE est subordonnée à l’obtention d’un Baccalauréat Séries C ou D ou tout
                            autre diplôme reconnu équivalent par les structures compétentes de l’Université. </p>
                        <br>

                        <hr>
                    </div>
                </div>
            </div>

            {{-- ROW - 3 --}}
            <div class="row mt-5">

                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-4">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Profils de Sortie</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            Le grade de Licence sanctionne la formation du premier cycle répondant en priorité aux finalités
                            de l’insertion professionnelle et éventuellement à l’entrée au cycle de Master. Les principaux
                            profils de sortie pour la licence en PSE sont :
                        </p>
                        <br>
                        <ul style="text-align: left" class="offset-1">
                            <li>
                                • Planificateur ,
                            </li>
                            <br>

                            <li>
                                • Assistant Planificateur ,
                            </li>
                            <br>

                            <li>
                                • Concepteur de projets/programmes ,
                            </li>
                            <br>

                            <li>
                                • Gestionnaire de projets/programmes ,
                            </li>
                            <br>

                            <li>
                                • Chef de projets ou d’unités de gestion de projets ,
                            </li>
                            <br>

                            <li>
                                • Suivi-Évaluateur de projets/programmes ,
                            </li>
                            <br>

                            <li>
                                • Concepteur de bases de données destinées au suivi-évaluation ,
                            </li>
                            <br>

                            <li>
                                • Gestionnaire de bases de données destinées au suivi-évaluation ,
                            </li>
                            <br>

                            <li>
                                • etc.
                            </li>
                        </ul>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-1">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Débouchés</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            À l'issue de cette formation, vous serez en mesure d'accéder à diverses opportunités
                            professionnelles, telles que :
                        </p>
                        <br>
                        <ul style="text-align: left" class="offset-1">
                            <li>
                                • Planificateur des Ministères Sectoriels, des Collectivités Décentralisées,
                            </li>
                            <br>

                            <li>
                                • Concepteur de projets / programmes ,
                            </li>
                            <br>

                            <li>
                                • Gestionnaire de projets / programmes ,
                            </li>
                            <br>

                            <li>
                                • Chef de projets ou d’unités de gestion de projets ,
                            </li>
                            <br>


                            <li>
                                • Assistant Suivi-Évaluateur ,
                            </li>
                            <br>

                            <li>
                                • cabinets d’études et centres et laboratoires de recherche ,
                            </li>
                            <br>

                            <li>
                                • projets de développement et ONG ,
                            </li>
                            <br>

                            <li>
                                • auto-emploi ,
                            </li>
                            <br>

                            <li>
                                • etc.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- ROW-3 --}}
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-2">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Modalités d'admission</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            Les modalités d’admission en <span style="font-weight: bold; color: orange"> Licence PSE</span>
                            sont les suivantes :
                        </p>
                        <br>
                        <ul style="text-align: left" class="offset-1">
                            <li>
                                • sélection par concours au niveau national et par les soins du <span
                                    style="font-weight: bold; color: orange">Ministère de l’Enseignement
                                    Supérieur et de la Recherche Scientifique</span>,

                            </li>
                            <br>

                            <li>
                                • étude de dossiers et/ou test au niveau de l’ENSPD ,
                            </li>
                            <br>


                            <li>
                                • étude de dossiers par la <span style="font-weight: bold; color: orange">Commission
                                    Universitaire
                                    d’Orientation</span> (CUO).
                            </li>
                            <br>
                        </ul>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="icon-box icon-box-clr-2">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">
                                Personnes à contacter pour plus d'informations
                            </a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            AÏZOUN D. Doris Ghislaine
                            <br>
                            <span style="text-decoration: underline">e-mail</span>
                            : contact.enspd-up@gouv.bj / ghislaineaizoun@yahoo.fr
                        </p>
                        <hr>
                        <p style="text-align: justify">
                            DJOHY Georges
                            <br>
                            <span style="text-decoration: underline">e-mail</span>
                            : georgesdjohy@yahoo.fr / gdjohy@gmail.com
                        </p>
                        <hr>
                        <p style="text-align: justify">
                            AGBO Maxime
                            <br>
                            <span style="text-decoration: underline">e-mail</span>
                            : agbomaxime@gmail.com
                        </p>
                        <hr>

                        <p style="text-align: justify">
                            SODJINOU Epiphane
                            <br>
                            <span style="text-decoration: underline">e-mail</span>
                            : esodjinou@gouv.bj / sodjinoue@gmail.com
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
