@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Delete Product
    <small>Form</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Product</li>
  </ol>
</section>


<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Delete Product</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body">
                <form class="form-horizontal" method="POST" action="{{ url('/dataproduct/postdelete') }}">
                    {{ csrf_field() }}
                    <input id="id" type="hidden" class="form-control" name="id" value="{{ $data->id }}">
                    Are you sure delete {{$data->product_name}} ?<br>
                    <p>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Delete
                            </button>
                            <a href="/dataproduct" class="btn btn-default">Back</a>
                        </div>
                    </div>

                </form>
            </div>
            </div>


          </div>


</section>


@endsection
