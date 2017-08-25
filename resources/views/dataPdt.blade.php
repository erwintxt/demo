@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Data Product
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Product</li>
  </ol>
</section>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Product Data Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table" id="mytablep">

                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Produk</th>
                  <th>Nama Supplier</th>
                  <th>Harga</th>
                  <!--<th>tanggal daftar</th>-->
                  <th>action</th>
                </tr>
                </thead>
                </table>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


            <!-- /.box -->
          </div>


</section>
@endsection
