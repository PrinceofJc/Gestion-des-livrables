@extends('layouts.master')
@section('title')
@lang('translation.Invoice_List')
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') BILAN DE TEST @endslot
@slot('title')GENERER @endslot
@endcomponent

<div class="row">
    <div class="col-md-4">
        <div>
            <button type="button" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i>Generer un bilan</button>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>PROJET ID</th>
                                <th>Nom du projet</th>
                                <th>Date echeance</th>
                                <th>Budget</th>
                                <th>Statut</th>
                                <th>Voir Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                                <td>SG TOGO</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-soft-success font-size-12">Terminé</span>
                                </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        Voir details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2541</a> </td>
                                <td>SG GHANA</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $380
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-soft-danger font-size-12">En cours</span>
                                </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        Voir details
                                    </button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection
