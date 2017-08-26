@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Data User
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data User</li>
  </ol>
</section>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">User Data Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <a href="/datauser/create" class="btn btn-primary">Tambah Data</a>
                <table class="table" id="mytable">

                <thead>
                <tr>
                  <th>ID</th>
                  <th>nama</th>
                  <th>alamat</th>
                  <th>email</th>
                  <th>telepon</th>
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
