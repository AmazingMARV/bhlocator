@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/datatables.min.css') }}">



<div class="container">
    <div class="row">
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
    </div>
</div>
    


<script src=" {{ asset('/js/datatables.min.js') }}"></script>

<script>
   $(document).ready(function() {

        var table = $('#users').DataTable({
            processing: true,
            ajax: {
                url: '/sample-user',
                dataSrc: ''
            },
            columns: [
              //  { data: 'user_id', 'visible' : false },
                { data: 'user_id' },
                { data: 'fname'},
                { data: 'mname' },
                { data: 'lname' },
                { data: 'email' },
                { data: 'role' },
                {
                    defaultContent: '<button class="btn btn-warning btn-sm" id="edit">Edit</button><button class="btn btn-danger btn-sm" id="delete">Delete</button>'
                }
            ]
        });
        
    
    $('#users tbody').on( 'click', '#edit', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var id = data['user_id'];
        window.location = '/admin-dashboard/' + id + '/edit';

    });//criteria click edit

    $('#users tbody').on( 'click', '#delete', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var id = data['user_id'];

        axios.delete('/admin-dashboard/'+ id ).then(res=>{
                if(res.status === 200){
                    alert('Data successfully Deleted.');
                    window.location = '/admin-dashboard';
                }
            });

    });//criteria click delete

   
    
  } ); //close document ready
</script>

@endsection