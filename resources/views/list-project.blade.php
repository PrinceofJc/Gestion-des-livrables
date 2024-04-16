@extends('layouts.master')
@section('title')
    @lang('translation.Orders')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') PROJET @endslot
        @slot('title') Liste des projets @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div>


                <a href="add-project" type="button" class="btn btn-success waves-effect waves-light mb-3">
                    <i class="mdi mdi-plus me-1"></i> Ajouter un projet</a>
            </div>
            <div class="table-responsive mb-4">
                @php
                    $projects= App\Models\Project::all();
                @endphp
                @if(session('status'))
                <div class="alert alert-success">

                    {{ session('status') }}
                </div>

                @endif
                <table class="table table-centered datatable dt-responsive nowrap table-card-list"
                    style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th style="width: 20px;">
                                <div class="form-check text-center font-size-16">
                                    <input type="checkbox" class="form-check-input" id="ordercheck">
                                    <label class="form-check-label" for="ordercheck"></label>
                                </div>
                            </th>
                            <th>PROJET ID</th>
                            <th>Date echeance</th>
                            <th>Nom du projet</th>
                            <th>Budget</th>
                            <th>Statut</th>
                            <th style="width: 120px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($projects as $projet)
                        <tr>
                            <td>
                                <div class="form-check text-center font-size-16">
                                    <input type="checkbox" class="form-check-input" id="ordercheck1">
                                    <label class="form-check-label" for="ordercheck1"></label>
                                </div>
                            </td>

                            <td><a href="javascript: void(0);" class="text-dark fw-bold">{{$projet->id}}</a> </td>
                            <td>{{ $projet->datef }}</td>
                            <td>{{ $projet->nomprojet }}</td>
                            <td>{{ $projet->budgetreel }}</td>
                            <td>
                                <div class="badge bg-pill bg-soft-success font-size-12">Terminer</div>
                            </td>

                            <td>
                                <a href="/update-project/{{ $projet->id }}" class="px-3 text-primary"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a href="javascript:void(0);" class="px-3 text-danger"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- end table -->
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection
