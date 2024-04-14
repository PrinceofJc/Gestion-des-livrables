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
        <form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-firstname-input">Nom du projet</label>
                        <input type="text" class="form-control" id="basicpill-firstname-input" placeholder="Enter your First name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-lastname-input">Last Name</label>
                        <input type="text" class="form-control" id="basicpill-lastname-input" placeholder="Enter your Last Name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-phoneno-input">Phone</label>
                        <input type="text" class="form-control" id="basicpill-phoneno-input" placeholder="Enter your Phone Number">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-email-input">Email</label>
                        <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter your email address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="basicpill-address-input">Address</label>
                        <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter your Address"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Company Document -->
    <h3>Company Document</h3>
    <section>
        <form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-pancard-input">PAN Card</label>
                        <input type="text" class="form-control" id="basicpill-pancard-input" placeholder="Enter your Pancard Number" />
                    </div>
                </div><!-- end col-lg-6 -->

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-vatno-input">VAT/TIN No.</label>
                        <input type="text" class="form-control" id="basicpill-vatno-input" placeholder="Enter your VAT/TIN number.">
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-cstno-input">CST No.</label>
                        <input type="text" class="form-control" id="basicpill-cstno-input" placeholder="Enter your CST number">
                    </div>
                </div><!-- end col-lg-6 -->

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-servicetax-input">Service Tax No.</label>
                        <input type="text" class="form-control" id="basicpill-servicetax-input" placeholder="Enter your Service Tax number">
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-companyuin-input">Company UIN</label>
                        <input type="text" class="form-control" id="basicpill-companyuin-input" placeholder="Enter your Company UIN number">
                    </div>
                </div><!-- end col-lg-6 -->

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="basicpill-declaration-input">Declaration</label>
                        <input type="text" class="form-control" id="basicpill-Declaration-input" placeholder="Enter your Declaration">
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </form>
    </section>

    <!-- Bank Details -->
    <h3>Bank Details</h3>
    <section>
        <div>
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="basicpill-namecard-input">Name on Card</label>
                            <input type="text" class="form-control" id="basicpill-namecard-input" placeholder="Enter your Name on Card">
                        </div>
                    </div><!-- end col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label>Credit Card Type</label>
                            <select class="form-select">
                                <option selected>Select Card Type</option>
                                <option value="AE">American Express</option>
                                <option value="VI">Visa</option>
                                <option value="MC">MasterCard</option>
                                <option value="DI">Discover</option>
                            </select>
                        </div>
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="basicpill-cardno-input">Credit Card Number</label>
                            <input type="text" class="form-control" id="basicpill-cardno-input" placeholder="Enter your Enter your Credit Card Number">
                        </div>
                    </div><!-- end col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="basicpill-card-verification-input">Card Verification Number</label>
                            <input type="text" class="form-control" id="basicpill-card-verification-input" placeholder="Enter your Card Verification Number">
                        </div>
                    </div><!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="basicpill-expiration-input">Expiration Date</label>
                            <input type="text" class="form-control" id="basicpill-expiration-input" placeholder="Enter your Expiration Date">
                        </div>
                    </div><!-- end col-lg-6 -->

                </div><!-- end row -->
            </form>
        </div>
    </section>


</div>
<!-- end row -->




@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/ecommerce-add-product.init.js') }}"></script>
@endsection
