<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                  <li>
                                  <a href="{{ url('/profil') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('profil-form').submit();">
                                      Change Profil
                                  </a>

                                  <form id="profil-form" action="{{ url('/profil') }}" method="GET" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                                  </li>
                                  <li>
                                  <a href="{{ url('/change') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('change-form').submit();">
                                      Change Password
                                  </a>

                                  <form id="change-form" action="{{ url('/change') }}" method="GET" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                                  </li>
                                    <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery -->
    <!--<script src="//code.jquery.com/jquery.js"></script>-->
    <!-- DataTables -->
    <!-- Bootstrap JavaScript -->
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            var oTable = $('#mytable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/datauser/post'
                },
                columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'address', name: 'address'},
                {data: 'email', name: 'email'},
                {data: 'telp', name: 'telp'},
                //{data: 'created_at', name: 'created_at', orderable: false, searchable: false},
                { data: 'action', 'searchable': false, 'orderable':false }
            ],
            });

        });
        $(function() {
            var oTable = $('#mytablep').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/dataproduct/post'
                },
                columns: [
                {data: 'id', name: 'id'},
                {data: 'product_name', name: 'product_name'},
                {data: 'supplier_name', name: 'supplier_name'},
                {data: 'price', name: 'price'},
                //{data: 'created_at', name: 'created_at', orderable: false, searchable: false},
                { data: 'action', 'searchable': false, 'orderable':false }
            ],
            });

        });
    </script>

</body>
</html>
