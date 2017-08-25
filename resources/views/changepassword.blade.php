@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Change Password
    <small>Form</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Password</li>
  </ol>
</section>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Enter New Password</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/postchange') }}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
                    <label for="oldpassword">Old Password</label>
                    <input class="form-control" id="oldpassword" placeholder="" type="password" name="oldpassword" required>
                    @if ($errors->has('oldpassword'))
                        <span class="help-block">
                            <strong>{{ $errors->first('oldpassword') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" placeholder="" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('password-confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirmation">Re Password</label>
                    <input class="form-control" id="password-confirmation" placeholder="" type="password" class="form-control" name="password-confirmation" required>
                    @if ($errors->has('password-confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password-confirmation') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Change</button>
                </div>
                @if(Session::has('flash_message'))
                <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i>
                        </button>
                                {{ Session::get('flash_message') }}
                </div>
                @endif
              </form>
            </div>


          </div>


</section>
@endsection
