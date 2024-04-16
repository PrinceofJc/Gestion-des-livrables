@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') TABLEAU DE BORD @endslot
@slot('title') GESTION DES LIVRABLES DE FIN DE PROJET @endslot
@endcomponent

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">4</span></h4>
                    <p class="text-muted mb-0">TOTAL PROJET</p>
                </div>

            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">1</span></h4>
                    <p class="text-muted mb-0">PROJET TERMINER</p>
                </div>

            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">2</span></h4>
                    <p class="text-muted mb-0">PROJET EN COURS</p>
                </div>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">

        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="growth-chart" data-colors='["--bs-warning"]'></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">1</span></h4>
                    <p class="text-muted mb-0">EN GLISSEMENT</p>
                </div>

            </div>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <div class="dropdown">



                    </div>
                </div>
                <h4 class="card-title mb-4">POURCENTAGE PAR STATUT</h4>

                <div class="mt-1">

                </div>

                <div class="mt-3">
                    <div id="sales-analytics-chart" data-colors='["--bs-primary", "#dfe2e6", "--bs-warning"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-xl-4">
        <div class="card bg-primary">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <p class="text-white font-size-18">Hello <b>creer</b> un projet ici <i class="mdi mdi-arrow-right"></i></p>
                        <div class="mt-4">
                            <a href="add-project" class="btn btn-success waves-effect waves-light">Creer un projet</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mt-4 mt-sm-0">
                            <img src="{{ URL::asset('/assets/images/setup-analytics-amico.svg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->

        <div class="card">
            <div class="card-body">
                <div class="float-end">

                </div>

                <h4 class="card-title mb-4">Graphe globale</h4>


                <div class="row align-items-center g-0 mt-3">
                    <div class="col-sm-3">
                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i>Re-use </p>
                    </div>

                    <div class="col-sm-9">
                        <div class="progress mt-1" style="height: 6px;">
                            <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                            </div>
                        </div>
                    </div>
                </div> <!-- end row-->


                <div class="row align-items-center g-0 mt-3">
                    <div class="col-sm-3">
                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-success me-2"></i> Automatisé </p>
                    </div>
                    <div class="col-sm-9">
                        <div class="progress mt-1" style="height: 6px;">
                            <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                            </div>
                        </div>
                    </div>
                </div> <!-- end row-->

                <div class="row align-items-center g-0 mt-3">
                    <div class="col-sm-3">
                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-warning me-2"></i> Manuelle </p>
                    </div>
                    <div class="col-sm-9">
                        <div class="progress mt-1" style="height: 6px;">
                            <div class="progress-bar progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78">
                            </div>
                        </div>
                    </div>
                </div> <!-- end row-->

                <div class="row align-items-center g-0 mt-3">
                    <div class="col-sm-3">
                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-purple me-2"></i> N/A </p>
                    </div>
                    <div class="col-sm-9">
                        <div class="progress mt-1" style="height: 6px;">
                            <div class="progress-bar progress-bar bg-purple" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="63">
                            </div>
                        </div>
                    </div>
                </div> <!-- end row-->

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end Col -->
</div> <!-- end row-->



<!-- end row -->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection
