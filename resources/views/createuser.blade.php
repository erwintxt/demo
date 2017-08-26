@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Create User
    <small>Form</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">User</li>
  </ol>
</section>


<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Crate User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/datauser/createpost') }}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Name</label>
                    <input class="form-control" id="Name" placeholder="" type="text"name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="address">Address</label>
                    <input class="form-control" id="Address" placeholder="" type="text" name="address" value="{{old('address') }}" required autofocus>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                    <label for="telp">Phone</label>
                    <input class="form-control" id="telp" placeholder="" type="telp" name="telp" value="{{ old('telp') }}" required autofocus>
                    @if ($errors->has('telp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telp') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" placeholder="" type="email" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">password</label>
                    <input class="form-control" id="password" placeholder="" type="password" name="password" value="{{ old('paswword') }}" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('password-confirmation') ? ' has-error' : '' }}">
                    <label for="email">Re Password</label>
                    <input class="form-control" id="password-confirmation" placeholder="" type="password" name="password-confirmation" value="{{ old('password-confirmation') }}" required>
                    @if ($errors->has('password-confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password-confirmation') }}</strong>
                        </span>
                    @endif
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/datauser" class="btn btn-default">Kembali</a>
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
