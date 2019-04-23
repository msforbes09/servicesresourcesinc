<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('assets/images/sri-logo1-128x128.png') }}" type="image/x-icon">
    <title>SRI Website Admin Panel</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap-lumen.min.css') }}">
    <link href="{{ url('sb-admin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ url('sb-admin/dist/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ url('sb-admin/dist/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div class="row">
            <div class="container">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-12">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <fieldset>
                                        <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email@address" required autofocus>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="checkbox">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('sb-admin/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('sb-admin/dist/js/sb-admin-2.js') }}"></script>
</body>
</html>




