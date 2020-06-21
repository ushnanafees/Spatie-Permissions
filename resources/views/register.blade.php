<?php include('header.php'); ?>
<?php include('left_navbar.php'); ?>
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
                                    <li class="breadcrumb-item"><a href="javascript:">Sales Funnel</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Add Funnel</a></li>
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
                                        <h5>Sales Funnel</h5>
                                    </div>
                                    <div class="card-body">
                                        <h5>Add Funnel</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form method="POST" action="#">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">AE</label>
                                                        <input name="ae" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter AE">
                                                        <small id="emailHelp" class="form-text text-muted">AE</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Customer</label>
                                                        <input name="customer" type="text" class="form-control" placeholder="Customer">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Line of Business</label>
                                                        <input name="lineofbusiness" type="text" class="form-control" placeholder="Line of Business">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Quantity</label>
                                                        <input name="quantity" type="number" class="form-control" placeholder="Quantity">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">REV</label>
                                                        <input name="rev" type="number" class="form-control" placeholder="REV">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Base/Stretch</label>

                                                        <select name="base_stretch" class="mb-3 form-control form-control-lg">
                                                            <option value="base">Base</option>
                                                            <option value="stretch">Stretch</option>
                                                        </select>


                                                    </div>


                                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>

                                                </form></div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Probability (%)</label>
                                                    <input name="probability" type="number" class="form-control" placeholder="Probability">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">City</label>
                                                    <input name="city" type="text" class="form-control" placeholder="City">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Opening Week</label>
                                                    <input name="opening_quarter" type="text" class="form-control" placeholder="Quarter">
                                                    <input name="opening_week" type="text" class="form-control" placeholder="Bid Week">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Closing Week</label>
                                                    <input name="closing_quarter" type="text" class="form-control" placeholder="Quarter">
                                                    <input name="closing_week" type="text" class="form-control" placeholder="Bid Week">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Remarks</label>
                                                    <textarea name="remarks" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Input group -->

                            </div>
                        </div>
                        <!--

                    </div>
                </div>
            </div>
</body>


<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/menu-setting.min.js"></script>

