@extends('layouts.owner')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/datatables.min.css') }}">



<div class="container">
    <div class="row">
        <table id="bedrooms" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Bedroom ID</th>
                    <th>Bedroom Name</th>
                    <th>Bed Amenities</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Bedroom ID</th>
                    <th>Bedroom Name</th>
                    <th>Bed Amenities</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Action</th>
                   
                </tr>
            </tfoot>
        </table>
    </div>
    <a class="btn btn-success mt-3 btn-create-dashboard" href="/bhouse-view-bed/{{$id}}/create" role="button">ADD / NEW</a>
</div>
    


<script src=" {{ asset('/js/datatables.min.js') }}"></script>

<script>
   $(document).ready(function() {

        var table = $('#bedrooms').DataTable({
            processing: true,
            ajax: {
                url: '/fetch-bed?id={{$id}}',
                dataSrc: ''
            },
            columns: [
              //  { data: 'bedroom_id', 'visible' : false },
                { data: 'bedroom_id' },
                { data: 'bedroom_name'},
                { data: 'bed_amenities' },
                { data: 'price' },
                { data: 'is_available' },
                
                {
                    defaultContent: '<button class="btn btn-warning btn-sm" id="edit">Edit</button><button class="btn btn-danger btn-sm" id="delete">Delete</button>'
                }
            ]
        });
        
    
    $('#bedrooms tbody').on( 'click', '#edit', function () {
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