<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="endro | jst">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>SORY | System Inventory</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/template.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond..min.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Sign In to <strong class="text-custom">SORY</strong> </h3>
        </div>


        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox" name="remember">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="{{ url('/password/reset') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-sm-12 text-center">--}}
            {{--<p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>--}}

        {{--</div>--}}
    {{--</div>--}}

</div>




<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>


<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>