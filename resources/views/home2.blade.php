@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>
                    <!--<a href="{{ url('/mail') }}">Mail</a>-->
                    <p>
                    <div class = "col-md-8">
                      <a href="{{ url('/datauser')}}" class="btn btn-primary btn-lg">Data User</a>
                      <a href="{{ url('/dataproduct')}}" class="btn btn-danger btn-lg">Data Product</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
