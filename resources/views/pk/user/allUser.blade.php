@include('pk.includes.header')
<br>
<br>
<br>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body {
                padding-top: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
             <table class="table table-bordered" id="users-table">
		        <thead>
		            <tr>
		                <th>Id</th>
		                <th>Name</th>
		                <th>Email</th>
		                <th>Created At</th>
		                <th>Updated At</th>
		            </tr>
		        </thead>
		    </table>
        </div>

        <!-- jQuery -->
        
        <!-- App scripts -->
        <!-- @stack('scripts') -->

        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script>
        	$(function() {
			    $('#users-table').DataTable({
			        processing: true,
			        serverSide: true,
			        ajax: '{!! route('datatables.data') !!}',
			        columns: [
			            { data: 'id', name: 'id' },
			            { data: 'last_name', name: 'last_name' },
			            { data: 'email', name: 'email' },
			            { data: 'created_at', name: 'created_at' },
			            { data: 'updated_at', name: 'updated_at' }
			        ]
			    });
			});
        </script>
    </body>
</html>