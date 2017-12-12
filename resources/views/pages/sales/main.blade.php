@extends('base')
@section('title','Sales')
@section('plugin_style')

@endsection

@section('page_style')

@endsection

@section('breadcrumbs')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Sales</li>

    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
        </div>
    </li>
</ol>
@endsection

@section('content')
<div class="card" ng-app="larapos">
    <div class="card-header">
        Sales (POS)
    </div> 
    <div class="card-body">
        <div class="row" ng-controller="SearchItemCtrl">
            <div class="col-lg-3">

                <div class="form-group">
                    <input type="text" class="form-control" name="search_product" placeholder="Search Product" ng-model="searchKeyword" />
                </div>
                <table class="table table-condensed table-borderless table-hover table-sm">
                    <tr ng-repeat="item in items  | filter: searchKeyword | limitTo:10">
                        <td>@{{item.item_name}}</td>
                        <td class='text-right'>
                            <button class="btn btn-success btn-sm" type="button" ng-click="addSaleTemp(item, newsaletemp)">
                                <i class='fa fa-share'></i>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-9">
                <form method="POST" action="{{ route('sales.save') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="invoice">Invoice</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="invoice" name='invoice' value="@if ($sale) {{$sale->id + 1}} @else 1 @endif" readonly/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="employee">Employee</label>
                                <div class="col-md-9 text-right">
                                    <input type="text" class="form-control" id="employee" name='employee' value="{{ Auth::user()->username }}" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="customer">Customer</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="customer_id">
                                        @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}">{{  $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="payment_type">Payment Type</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="payment_type">
                                        <option value="cash">Cash</option>
                                        <option value="check">Check</option>
                                        <option value="debit">Debit Card</option>
                                        <option value="credit">Credit Card</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Item ID</td>
                                        <td>Item Name</td>
                                        <td>Price</td>
                                        <td>Quantity</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="newsaletemp in saletemp">
                                        <td>@{{newsaletemp.item_id}}</td>
                                        <td>@{{newsaletemp.item.item_name}}</td>
                                        <td>@{{newsaletemp.item.selling_price | currency}}</td>
                                        <td>
                                            <input type="text" style="text-align:center" autocomplete="off" name="quantity" ng-change="updateSaleTemp(newsaletemp)" ng-model="newsaletemp.quantity" size="2"></td>
                                        <td>@{{newsaletemp.item.selling_price * newsaletemp.quantity | currency}}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" type="button" ng-click="removeSaleTemp(newsaletemp.id)">
                                                <i class='fa fa-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="payment_amount">Payment</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="payment_amount" ng-model="add_payment">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="comment">Comment</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="comment">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="total">TOTAL</label>
                                <div class="col-md-9">
                                    @{{sum(saletemp) | currency}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="amount_due">Amount Due</label>
                                <div class="col-md-9">
                                    @{{add_payment - sum(saletemp) | currency}}
                                </div>
                            </div>
                            <hr/>
                            <button class="btn btn-success btn-block">Complete Sale</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('plugin_script')
<script src="{{ asset('js/angular.min.js') }}" type="text/javascript"></script>
@endsection

@section('page_script')
<script src="{{ asset('js/angular/sales.js') }}" type="text/javascript"></script>
@endsection
