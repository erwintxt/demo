@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Edit Product
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
                <h3 class="box-title">Edit Product</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ url('/dataproduct/postedit') }}">
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                      <label for="name" class="col-md-4 control-label">Product Name</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="product_name" value="{{ $data->product_name }}" required autofocus>
                          <input id="id" type="hidden" class="form-control" name="id" value="{{ $data->id }}">

                          @if ($errors->has('product_name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('product_name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('supplier_name') ? ' has-error' : '' }}">
                      <label for="address" class="col-md-4 control-label">Supplier</label>

                      <div class="col-md-6">
                          <input id="address" type="text" class="form-control" name="supplier_name" value="{{$data->supplier_name }}" required autofocus>

                          @if ($errors->has('supplier_name'))
                              <span class="help-block">
                              </span>
                              <strong>{{ $errors->first('supplier_name') }}</strong>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                      <label for="telp" class="col-md-4 control-label">price</label>

                      <div class="col-md-6">
                          <input id="telp" type="text" class="form-control" name="price" value="{{ $data->price }}" required autofocus>

                          @if ($errors->has('price'))
                              <span class="help-block">
                              </span>
                              <strong>{{ $errors->first('price') }}</strong>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-8 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              Change
                          </button>
                          <a href="/dataproduct" class="btn btn-default">Kembali</a>
                      </div>
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
