@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Confirm Delete product</div>

                <div class="panel-body">
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
    </div>
</div>
@endsection
