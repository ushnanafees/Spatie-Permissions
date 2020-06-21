@include('header');
@include('left_navbar');

<body>

<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>

<div class="pcoded-main-container">
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
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Sales Person</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Add Order Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Sales Order</h5>
                                    </div>
                                    <div class="card-body">
                                        <h5>Add Order</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form method="POST" action="add_orders">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">PO Number</label>
                                                        <input name="po_number" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter PO Number">
                                                        <small id="emailHelp" class="form-text text-muted">Pay Order Number</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Value</label>
                                                        <input name="value" type="number" class="form-control" placeholder="Value(Price)">
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Client Name</label>
                                                                <input name="client_name" type="text" class="form-control" placeholder="Client Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Date</label>
                                                                <input name="date" type="date" class="form-control" placeholder="Date">
                                                            </div>



                                                    </div>

                                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>



                                                </form></div>

                                        </div>

                                    </div>
                                </div>
                                <!-- Input group -->

                            </div>
                        </div>



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




