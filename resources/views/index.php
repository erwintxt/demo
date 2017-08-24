<html>
<head>
<title>User</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
</head>
<body>
<table class="table" id="mytable">

<thead>
<tr>
  <th>ID</th>
  <th>nama</th>
  <th>email</th>
  <th>tanggal daftar</th>
</tr>
</thead>
</table>


<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
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
                url: '/datatables/user'
            },
            columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at', orderable: false, searchable: false},
        ],
        });
    });
</script>
</body>

</html>
