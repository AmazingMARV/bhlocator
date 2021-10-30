@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/datatables.min.css') }}">



<table id="users" class="display" style="width:100%">
        <thead>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
               
            </tr>
        </tfoot>
</table>


<script src=" {{ asset('/js/datatables.min.js') }}"></script>

<script>
   $(document).ready(function() {
        $('#users').DataTable({
            "ajax": "sample-user",
            "processing": true,
            "serverSide": true,
            // "columns": [
            //     { "data": "user_id" },
            //     { "data": "fname" },
            //     { "data": "mname" },
            //     { "data": "lname" },
            //     { "data": "email" },
            //     { "data": "role" },
            
            // ],
            "columnDefs": [
            {  "targets": 0,
                "data": "user_id" 
            },
            { 
                "targets": 1,
                "data": "fname" 
            },
            { 
                "targets": 2,
                "data": "mname" 
            },
            { 
                "targets": 3,
                "data": "lname" 
            },
            { 
                "targets": 4,
                "data": "email" 
            },
            { 
                "targets": 5,
                "data": "role" 
            },
            {
                "targets": -1,
                "data": null,
                "defaultContent": '<a class="btn btn-primary" id="btnEdit">Edit</a>'
            }
            
        ],
    }); 
    
    $('#users tbody').on( 'click', 'btnEdit', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var id = data[0];
        alert(id);
        
    });

    
  } ); //close document ready
</script>

@endsection