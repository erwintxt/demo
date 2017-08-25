@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change password</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/postchange') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
                            <label for="oldpassword" class="col-md-4 control-label">Old Password</label>

                            <div class="col-md-6">
                                <input id="oldpassword" type="password" class="form-control" name="oldpassword" required>

                                @if ($errors->has('oldpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldpassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password-confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirmation" class="col-md-4 control-label">Re Password</label>

                            <div class="col-md-6">
                                <input id="password-confirmation" type="password" class="form-control" name="password-confirmation" required>

                                @if ($errors->has('password-confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password-confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change
                                </button>

                            </div>
                        </div>

                        @if(Session::has('flash_message'))
                        <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i>
                                </button>
                                        {{ Session::get('flash_message') }}
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
