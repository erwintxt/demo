@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-ls-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Data User</div>

                <div class="panel-body">
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
            </div>
        </div>
    </div>
</div>



@endsection
