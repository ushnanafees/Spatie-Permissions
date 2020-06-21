@include('header');
@include('left_navbar');

<body>

<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>


<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Sales</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Sales Person</a></li>
                                    <li class="breadcrumb-item"><a href="#!">View Sales Person</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-body">
                    <div class="page-wrapper">
                        {{--                        <div class="row">--}}

                        {{--                            <div class="col-sm-12">--}}
                        {{--                                <div class="card">--}}
                        {{--                                    <div class="card-header">--}}
                        {{--                                        <h5>List of Sales Person</h5>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="card-block">--}}
                        {{--                                        <div class="table-responsive">--}}
                        {{--                                            <div id="key-act-button_wrapper" class="dataTables_wrapper dt-bootstrap4">--}}


                        {{--                                                </div>--}}
                        {{--                                                <table id="key-act-button"--}}
                        {{--                                                       class="display table nowrap table-striped table-hover dataTable"--}}
                        {{--                                                       style="width: 100%;" role="grid"--}}
                        {{--                                                       aria-describedby="key-act-button_info">--}}
                        {{--                                                    <thead>--}}
                        {{--                                                    <tr role="row">--}}
                        {{--                                                        <th class="sorting_asc" tabindex="0"--}}
                        {{--                                                            aria-controls="key-act-button" rowspan="1" colspan="1"--}}
                        {{--                                                            aria-sort="ascending"--}}
                        {{--                                                            aria-label="Name: activate to sort column descending"--}}
                        {{--                                                            style="width: 118px;">Name--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"--}}
                        {{--                                                            rowspan="1" colspan="1"--}}
                        {{--                                                            aria-label="Position: activate to sort column ascending"--}}
                        {{--                                                            style="width: 126px;">Position--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"--}}
                        {{--                                                            rowspan="1" colspan="1"--}}
                        {{--                                                            aria-label="Office: activate to sort column ascending"--}}
                        {{--                                                            style="width: 106px;">Office--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"--}}
                        {{--                                                            rowspan="1" colspan="1"--}}
                        {{--                                                            aria-label="Monthly: activate to sort column ascending"--}}
                        {{--                                                            style="width: 90px;">Monthly--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"--}}
                        {{--                                                            rowspan="1" colspan="1"--}}
                        {{--                                                            aria-label="Quarterly: activate to sort column ascending"--}}
                        {{--                                                            style="width: 102px;">Quarterly--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"--}}
                        {{--                                                            rowspan="1" colspan="1"--}}
                        {{--                                                            aria-label="Yearly: activate to sort column ascending"--}}
                        {{--                                                            style="width: 69px;">Yearly--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"--}}
                        {{--                                                            rowspan="1" colspan="1"--}}
                        {{--                                                            aria-label="Half Yearly: activate to sort column ascending"--}}
                        {{--                                                            style="width: 113px;">Half Yearly--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"--}}
                        {{--                                                            rowspan="1" colspan="1"--}}
                        {{--                                                            aria-label="Actual: activate to sort column ascending"--}}
                        {{--                                                            style="width: 70px;">Actual--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"--}}
                        {{--                                                            rowspan="1" colspan="1"--}}
                        {{--                                                            aria-label="% Achieved: activate to sort column ascending"--}}
                        {{--                                                            style="width: 119px;">% Achieved--}}
                        {{--                                                        </th>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    </thead>--}}
                        {{--                                                    <tbody>--}}


                        {{--                                                    <tr role="row" class="odd">--}}
                        {{--                                                        <td class="sorting_1">981779</td>--}}
                        {{--                                                        <td>887766</td>--}}
                        {{--                                                        <td>7656456</td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td></td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td></td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    <tr role="row" class="even">--}}
                        {{--                                                        <td class="sorting_1">Test Person</td>--}}
                        {{--                                                        <td>Test Position</td>--}}
                        {{--                                                        <td>Test Office</td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td></td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td></td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    <tr role="row" class="odd">--}}
                        {{--                                                        <td class="sorting_1">ushnaTest</td>--}}
                        {{--                                                        <td>Developer</td>--}}
                        {{--                                                        <td>SIgbl</td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td></td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                        <td></td>--}}
                        {{--                                                        <td>0</td>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    </tbody>--}}

                        {{--                                                </table>--}}

                        {{--                                                <div class="dataTables_paginate paging_simple_numbers"--}}
                        {{--                                                     id="key-act-button_paginate">--}}
                        {{--                                                    <ul class="pagination">--}}
                        {{--                                                        <li class="paginate_button page-item previous disabled"--}}
                        {{--                                                            id="key-act-button_previous"><a href="#"--}}
                        {{--                                                                                            aria-controls="key-act-button"--}}
                        {{--                                                                                            data-dt-idx="0" tabindex="0"--}}
                        {{--                                                                                            class="page-link">Previous</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="paginate_button page-item active"><a href="#"--}}
                        {{--                                                                                                        aria-controls="key-act-button"--}}
                        {{--                                                                                                        data-dt-idx="1"--}}
                        {{--                                                                                                        tabindex="0"--}}
                        {{--                                                                                                        class="page-link">1</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="paginate_button page-item next disabled"--}}
                        {{--                                                            id="key-act-button_next"><a href="#"--}}
                        {{--                                                                                        aria-controls="key-act-button"--}}
                        {{--                                                                                        data-dt-idx="2" tabindex="0"--}}
                        {{--                                                                                        class="page-link">Next</a></li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>List of Sales Person</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <div id="key-act-button_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="dt-buttons btn-group">
                                                    <button class="btn btn-secondary buttons-copy buttons-html5"
                                                            tabindex="0" aria-controls="key-act-button" type="button">
                                                        <span>Copy</span></button>
                                                    <button class="btn btn-secondary buttons-excel buttons-html5"
                                                            tabindex="0" aria-controls="key-act-button" type="button">
                                                        <span>Excel</span></button>
                                                    <button class="btn btn-secondary buttons-csv buttons-html5"
                                                            tabindex="0" aria-controls="key-act-button" type="button">
                                                        <span>CSV</span></button>
                                                    <button class="btn btn-secondary buttons-pdf buttons-html5"
                                                            tabindex="0" aria-controls="key-act-button" type="button">
                                                        <span>PDF</span></button>
                                                </div>
                                                <div id="key-act-button_filter" class="dataTables_filter"><label>Search:<input
                                                            type="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="key-act-button"></label></div>
                                                <table id="key-act-button"
                                                       class="display table nowrap table-striped table-hover dataTable"
                                                       style="width: 100%;" role="grid"
                                                       aria-describedby="key-act-button_info">
                                                    <thead>
                                                    <tr role="row">

                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="key-act-button" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 118px;">
                                                            Name
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 126px;">
                                                            Position
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 106px;">
                                                            Office
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Monthly: activate to sort column ascending"
                                                            style="width: 90px;">Monthly
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Quarterly: activate to sort column ascending"
                                                            style="width: 102px;">Quarterly
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Yearly: activate to sort column ascending"
                                                            style="width: 69px;">Yearly
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Half Yearly: activate to sort column ascending"
                                                            style="width: 113px;">Half Yearly
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Actual: activate to sort column ascending"
                                                            style="width: 70px;">Actual
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="key-act-button"
                                                            rowspan="1" colspan="1"
                                                            aria-label="% Achieved: activate to sort column ascending"
                                                            style="width: 119px;">% Achieved
                                                        </th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>

                                                    @foreach($data as $u)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{$u->name}}</td>
                                                        <td>{{$u->position}}</td>
                                                        <td>{{$u->office}}</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td></td>
                                                        <td>0</td>
                                                        <td></td>
                                                        <td>0</td>
                                                    </tr>
                                                    @endforeach

                                                    </tbody>
                                                    <tfoot>

                                                    </tfoot>
                                                </table>
                                                <div class="dataTables_info" id="key-act-button_info" role="status"
                                                     aria-live="polite">Showing 1 to 4 of 4 entries
                                                </div>
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                     id="key-act-button_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="key-act-button_previous"><a href="#"
                                                                                            aria-controls="key-act-button"
                                                                                            data-dt-idx="0" tabindex="0"
                                                                                            class="page-link">Previous</a>
                                                        </li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                                                        aria-controls="key-act-button"
                                                                                                        data-dt-idx="1"
                                                                                                        tabindex="0"
                                                                                                        class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item next disabled"
                                                            id="key-act-button_next"><a href="#"
                                                                                        aria-controls="key-act-button"
                                                                                        data-dt-idx="2" tabindex="0"
                                                                                        class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/menu-setting.min.js"></script>

<script src="assets/plugins/data-tables/js/datatables.min.js"></script>
<script src="assets/js/pages/tbl-datatable-custom.js"></script>

<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/menu-setting.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<script src="assets/plugins/amchart/js/amcharts.js"></script>
<script src="assets/plugins/amchart/js/gauge.js"></script>
<script src="assets/plugins/amchart/js/serial.js"></script>
<script src="assets/plugins/amchart/js/light.js"></script>
<script src="assets/plugins/amchart/js/pie.min.js"></script>
<script src="assets/plugins/amchart/js/ammap.min.js"></script>
<script src="assets/plugins/amchart/js/usaLow.js"></script>
<script src="assets/plugins/amchart/js/radar.js"></script>
<script src="assets/plugins/amchart/js/worldLow.js"></script>

<script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<script src="assets/js/pages/dashboard-custom.js"></script>


</body>

</html>
