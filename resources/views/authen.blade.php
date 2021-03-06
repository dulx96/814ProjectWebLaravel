@extends("template.template")
@section('content')
<div class="container" id="authen">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form"
                                  action="/admin" method="get"
                                  role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username"
                                           tabindex="1" class="form-control"
                                           placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password"
                                           tabindex="2" class="form-control"
                                           placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit"
                                                   id="login-submit" tabindex="4"
                                                   class="form-control btn btn-login"
                                                   value="Log In">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection