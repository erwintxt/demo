@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Change Profile
    <small>Form</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Profile</li>
  </ol>
</section>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Profile User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('postprofil') }}">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Name</label>
                    <input class="form-control" id="Name" placeholder="" type="text"name="name" value="{{ Auth::user()->name }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="address">Address</label>
                    <input class="form-control" id="Address" placeholder="" type="text" name="address" value="{{Auth::user()->address }}" required autofocus>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                    <label for="telp">Phone</label>
                    <input class="form-control" id="telp" placeholder="" type="telp" name="telp" value="{{ Auth::user()->telp }}" required autofocus>
                    @if ($errors->has('telp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telp') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" placeholder="" type="email" name="email" value="{{ Auth::user()->email }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
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
