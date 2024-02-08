@extends('layout.app')
@section('title', 'Formation | Licence')
@section('content')

    {{-- SECTION-1 --}}
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Licence</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#"> Formation</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Licence</li>
                </ul>
            </div>
        </div>
    </section>


    {{-- SECTION 2 --}}
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="icon-box icon-box-clr-1">
                        <a href="{{ route('menu.formation.licence.un') }}">
                            <div class="icon">
                                <i class="fas fa-lightbulb">
                                </i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.licence.un') }}">
                                Statistique Appliquée
                                <p style="font-size: 25px">(SA)</p>
                            </a>
                        </h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="icon-box icon-box-clr-2">
                        <a href="{{ route('menu.formation.licence.deux') }}">
                            <div class="icon">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.licence.deux') }}">
                                Planification et suivi-évaluation
                                <p style="font-size: 25px">(PSE)</p>
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
