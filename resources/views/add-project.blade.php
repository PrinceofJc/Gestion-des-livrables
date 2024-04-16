@extends('layouts.master')
@section('title')
@lang('translation.Add_Product')
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') PROJET @endslot
@slot('title') Nouveau projet @endslot
@endcomponent

<div id="basic-example">
    <!-- Seller Details -->


    <section>
        @if(session('status'))
        <div class="alert alert-success">

            {{ session('status') }}
        </div>

        @endif
        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>

        <form action="{{ route('add-project.traitement') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="nomprojet">Nom du projet</label>
                        <input type="text" class="form-control" id="nomprojet" name="nomprojet" placeholder="Entrez le nom du projet">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="filiale">filiale</label>
                        <input type="text" class="form-control" id="filiale" name="filiale" placeholder="filiale">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="campagne">Campagne/Phase/Realease</label>
                        <input type="text" class="form-control" id="campagne" name="campagne" placeholder="Enter le nom de la campagne">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="Nbrecasprevus">Nombre de cas prevus</label>
                        <input type="text" class="form-control" id="Nbrecasprevu" name="nbrecasprevu" placeholder="Entrez le nombre de cas prevus">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="qualif">V. Qualification</label>
                        <input type="text" class="form-control" id="qualif" name="qualif" placeholder="La version de l'application en qualification" />
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="homo">V.Homologation</label>
                        <input type="text" class="form-control" id="homo" name="homo" placeholder="Entrer la version de l'application en homologation">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="post">V. Post MEP</label>
                        <input type="text" class="form-control" id="post" name="post" placeholder="Version de l'application en post MEP">
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="budgetprev">budget_previsionnel </label>
                        <input type="text" class="form-control" id="budgetprev" name="budgetprev" placeholder="Budget previsionnel">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="budgetreel">Budget reel</label>
                        <input type="text" class="form-control" id="budgetreel" name="budgetreel" placeholder="Budget reel">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="gap">GAP</label>
                        <input type="text" class="form-control" id="gap" name="gap" placeholder="GAP">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="datedeb" class="col-md-2 col-form-label">Date debut</label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" value="2019-08-19"  id="datedeb" name="datedeb">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="datef" class="col-md-2 col-form-label">Date fin</label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" value="2019-08-19"  id="datef" name="datef">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Soumettre</button>


            </div>

        </form>
    </section>




</div>
<!-- end row -->




@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/ecommerce-add-product.init.js') }}"></script>
@endsection
