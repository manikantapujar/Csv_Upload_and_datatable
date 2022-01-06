<!DOCTYPE html>
<html>
<head>
    <title> Datatables</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">List of data</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>NPI</th>
                <th>Provider Organization Name (Legal Business Name)'</th>
                <th>Provider Last Name (Legal Name)</th>
                <th>Provider First Name</th>
                <th>Provider Middle Name</th>
                <th>Provider Other Organization Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    var table= $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('dlist.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'NPI', name: 'NPI'},
            {data: 'Provider Organization Name (Legal Business Name)', name: 'Provider Organization Name (Legal Business Name)'},
            {data: 'Provider Last Name (Legal Name)', name: 'Provider Last Name (Legal Name)'},
            {data: 'Provider First Name', name: 'Provider First Name'},
            {data: 'Provider Middle Name', name: 'Provider Middle Name'},
            {data: 'Provider Other Organization Name', name: 'Provider Other Organization Name'},
            {
                data: 'action', 
                name: 'action', 
                orderable: false, 
                searchable: false,
            },
        ]
    });
    
  });
</script>
</html>