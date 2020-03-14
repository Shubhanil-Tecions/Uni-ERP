@extends('base')
@section('content')

    {{--<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">All Products</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">All Products</li>
            </ol>
        </div>
        <div>
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Export</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40 "><!--m-t-40-->
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                   cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Identity</th>
                                    <th>Name</th>
                                   --}}{{-- <th>Length</th>
                                    <th>Width</th>
                                    <th>Height</th>--}}{{--
                                    <th>Price</th>
                                    <th>Mfg Date</th>
                                   --}}{{-- <th>Factory</th>--}}{{--
                                    <th>Warranty</th>
                                    <th>QR Code</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->sl_no}}</td>
                                    <td>{{$product->identity}}</td>
                                    <td>{{$product->name}}</td>
                                    --}}{{--<td>{{$product->length.' inch'}}</td>
                                    <td>{{$product->width.' inch'}}</td>
                                    <td>{{$product->height}}</td>--}}{{--
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->manufacturing_date}}</td>
                                   --}}{{-- <td>{{$product->products_to_place->name}}</td>--}}{{--
                                    <td>{{$product->warranty_time.' years'}}</td>
                                    <td><img style="height: 200px; width: 200px" src="data:image/svg+xml;base64,{{$product->qr_code}}" alt="QR Code" /></td>
                                    --}}{{--<td>{{$product->qr_code}}</td>--}}{{--
                                    <td class="text-nowrap">
                                      --}}{{--  <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>--}}{{--
                                        <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                                    </td>
                                    --}}{{--<td>
                                        <button type="button"  class="btn btn-outline-danger" >Delete</button>
                                        <button type="button" class="btn btn-outline-primary" onclick="location.href='{{ url('adminAddRoom') }}'" >QR Code</button>
                                    </td>--}}{{--
                                </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Identity</th>
                                    <th>Name</th>
                                   --}}{{--<th>Length</th>
                                    <th>Width</th>
                                    <th>Height</th>--}}{{--
                                    <th>Price</th>
                                    <th>Mfg Date</th>
                                    --}}{{--<th>Factory</th>--}}{{--
                                    <th>Warranty</th>
                                    <th>QR Code</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>--}}

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Uniluxx Invoice</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">pages</li>
                    <li class="breadcrumb-item active">Invoice</li>
                </ol>
            </div>
            <div>
                <button
                    class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                    <i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->

          {{--<div class="card card-body printableArea">
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                @foreach($products as $product)
                                    @if($loop->iteration % 2 == 0)
                                        <div class="pull-right">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-5"><h5><b class="text-danger">Identity :
                                                                <!--</b>--></h5></div>
                                                    <div class="col-md-12"><h5> &nbsp;<b
                                                                class="text-danger">{{$product->identity}}</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p><h5>Variety :</h5></p>
                                                        <h5>Dimensions :</h5>
                                                        <h5>Product Code :</h5>

                                                    </div>
                                                    <div class="col-md-7">
                                                        <p><h5><b class="text-danger">{{$product->name}}</b></h5></p>
                                                        <h5>{{$product->length.' inch'}} X {{$product->width.' inch'}}
                                                            X {{$product->height}}</h5>
                                                        <h5></h5>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <address>
                                                            <p><h5>Quantity :</h5></p>
                                                            <h5>Sl . No :</h5>
                                                            <h5>Date of Manufacture :</h5>
                                                            <h5>M.R.P (incl. of all taxs) :</h5>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <address>
                                                            <p><h5>1 No</h5></p>
                                                            <h5>{{$product->sl_no}}</h5>
                                                            <h5>{{$product->manufacturing_date}}</h5><br>
                                                            <h5>Rs. {{$product->price}}</h5>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h5> &nbsp;<b class="text-primary"><img
                                                                    style="height: 100px; width: 100px"
                                                                    src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                                    alt="QR Code"/></b></h5>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>

                                    @else

                                        <div class="pull-left">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-6"><h5><b class="text-danger">Identity :
                                                                <!--</b>--></h5></div>
                                                    <div class="col-md-12"><h5> &nbsp;<b
                                                                class="text-danger">{{$product->identity}}</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p><h5>Variety :</h5></p>
                                                        <h5>Dimensions :</h5>
                                                        <h5>Product Code :</h5>

                                                    </div>
                                                    <div class="col-md-7">
                                                        <p><h5><b class="text-danger">{{$product->name}}</b></h5></p>
                                                        <h5>{{$product->length.' inch'}} X {{$product->width.' inch'}}
                                                            X {{$product->height}}</h5>
                                                        <h5></h5>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p><h5>Quantity :</h5></p>
                                                        <h5>Sl . No :</h5>
                                                        <h5>Date of Manufacture :</h5>
                                                        <h5>M.R.P (incl. of all taxs) :</h5>

                                                    </div>
                                                    <div class="col-md-5">
                                                        <address>
                                                            <p><h5>1 No</h5></p>
                                                            <h5>{{$product->sl_no}}</h5>
                                                            <h5>{{$product->manufacturing_date}}</h5><br>
                                                            <h5>Rs. {{$product->price}}</h5>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h5> &nbsp;<b class="text-primary"><img
                                                                    style="height: 100px; width: 100px"
                                                                    src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                                    alt="QR Code"/></b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button id="print" class="btn btn-default btn-danger" type="button"><span><i
                                class="fa fa-print"></i> Print</span></button>
                </div>
            </div>--}}

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->

    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-body printableArea">
                <hr>
                <div class="row">
                    @foreach($products as $product)
                        @if($loop->iteration % 2 == 0)
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <address>
                                        <h3> &nbsp;<b class="text-danger">Identity : {{$product->identity}}</b></h3>
                                        <p class="text-muted m-l-5"> Variety : {{$product->name}}
                                            <br/> Dimension : {{$product->length.' inch'}} X {{$product->width.' inch'}}
                                            X {{$product->height}}
                                            <br/> Product Code : {{$product->sl_no}}
                                            <br/> Product Quantity : {{$product->sl_no}}
                                            <br/> S.L. No : {{$product->sl_no}}
                                            <br/>Date of Manufacture : {{$product->manufacturing_date}}
                                            <br/>M.R.P (Incl. of all taxs) : Rs. {{$product->price}}
                                            <br/>QR Code : <img
                                                style="height: 100px; width: 100px"
                                                src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                alt="QR Code"/></p>
                                    </address>
                                </div>
                                @else
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">Identity : {{$product->identity}}</b></h3>
                                            <p class="text-muted m-l-5"> Variety : {{$product->name}}
                                                <br/> Dimension : {{$product->length.' inch'}} X {{$product->width.' inch'}}
                                                X {{$product->height}}
                                                <br/> Product Code : {{$product->sl_no}}
                                                <br/> Product Quantity : {{$product->sl_no}}
                                                <br/> S.L. No : {{$product->sl_no}}
                                                <br/>Date of Manufacture : {{$product->manufacturing_date}}
                                                <br/>M.R.P (Incl. of all taxs) : Rs. {{$product->price}}
                                                <br/>QR Code : <img
                                                    style="height: 100px; width: 100px"
                                                    src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                    alt="QR Code"/></p>
                                        </address>
                                    </div>
                            </div>
                        @endif
                    @endforeach

                    <div class="col-md-12">
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                            <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop