@extends('layouts.app')
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
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input id="name" type="text"
                                                               class="form-control @error('name') is-invalid @enderror"
                                                               name="name" value="{{ old('name') }}" required
                                                               autocomplete="name" autofocus>

                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input id="email" type="email"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               name="email" value="{{ old('email') }}" required
                                                               autocomplete="email">

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                        <small id="emailHelp"
                                                               class="form-text text-muted">Email
                                                            address of new user</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>

                                                        <input id="password" type="password"
                                                               class="form-control @error('password') is-invalid @enderror"
                                                               name="password" required autocomplete="new-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                                                </div>
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
                                                            <label for="exampleInputPassword1">Office</label>
                                                            <input name="office" type="text"
                                                                   class="form-control" placeholder="Office">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Position</label>
                                                            <input name="position" type="text"
                                                                   class="form-control" placeholder="Position">
                                                        </div>

                                                    </div>

                                                    <br><br>
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Submit') }}
                                                    </button>

                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- Input group -->

                            </div>
                        </div>

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




{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>--}}
{{--                            <div class="col-md-6">--}}
{{--                            <select class="form-control" name="role">--}}
{{--                                <option value="1">admin</option>--}}
{{--                                <option value="2">Sales Person</option>--}}
{{--                            </select>--}}


{{--                                <input id="role" type="" class="form-control" name="role" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="form-group row">--}}
{{--                            <label for="office" class="col-md-4 col-form-label text-md-right">{{ __('Office') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="office" type="text" class="form-control" name="office" required >--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="form-group row">--}}
{{--                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="position" type="text" class="form-control" name="position" required >--}}
{{--                            </div>--}}
{{--                        </div>--}}




{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
