@include('header');
@include('left_navbar');>

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
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                    class="feather icon-home"></i></a></li>
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
                                                        <h5>Users</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5>Add Users</h5>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <form method="POST" action="add_user">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Name</label>
                                                                        <input name="name" required="" type="text"
                                                                               class="form-control"
                                                                               id="exampleInputEmail1"
                                                                               placeholder="Enter Name">

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Email</label>
                                                                        <input name="email" required="" type="email"
                                                                               class="form-control"
                                                                               id="exampleInputEmail1"
                                                                               placeholder="Enter Email Address">
                                                                        <small id="emailHelp"
                                                                               class="form-text text-muted">Email
                                                                            address of new user</small>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPassword1">Password</label>
                                                                        <input required="" name="password"
                                                                               type="password" class="form-control"
                                                                               placeholder="Enter Password">
                                                                    </div>

                                                                    <div class="col-md-6">

                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Role</label>
                                                                            <select class="form-control" name="role">
                                                                                <option value="1">admin</option>
                                                                                <option value="2">Sales Person</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Position</label>
                                                                            <input name="position" type="text"
                                                                                   class="form-control" placeholder="Position">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Office</label>
                                                                            <input name="office" type="text"
                                                                                   class="form-control" placeholder="Office">
                                                                        </div>


                                                                    </div>

                                                                    <br><br>
                                                                    <button name="submit" type="submit"
                                                                            class="btn btn-primary">Submit
                                                                    </button>

                                                                </form>
                                                            </div>
{{--                                                            <div class="col-md-6">--}}

{{--                                                                <div class="form-group">--}}
{{--                                                                    <label for="exampleInputPassword1">Role</label>--}}
{{--                                                                    <select class="form-control" name="role">--}}
{{--                                                                        <option value="1">admin</option>--}}
{{--                                                                        <option value="2">Sales Person</option>--}}
{{--                                                                    </select>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="form-group">--}}
{{--                                                                    <label for="exampleInputPassword1">Position</label>--}}
{{--                                                                    <input name="position" type="text"--}}
{{--                                                                           class="form-control" placeholder="Position">--}}
{{--                                                                </div>--}}

{{--                                                                <div class="form-group">--}}
{{--                                                                    <label for="exampleInputPassword1">Office</label>--}}
{{--                                                                    <input name="office" type="text"--}}
{{--                                                                           class="form-control" placeholder="Office">--}}
{{--                                                                </div>--}}


{{--                                                            </div>--}}
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Input group -->

                                            </div>
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




