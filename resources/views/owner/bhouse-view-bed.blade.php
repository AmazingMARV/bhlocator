@extends('layouts.owner')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/datatables.min.css') }}">



<div class="container">
    <div class="row">
        <table id="bedrooms" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Bedroom ID</th>
                    <th>bhouse ID</th>
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
                    <th>bhouse ID</th>
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
    <!--Modal--!-->
<div class="modal fade" id="btnDialog" tabindex="-1" role="dialog" aria-labelledby="btnDialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Message Prompt</h5>
                <button type="button" class="close" id="closeModal1" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Do you want to delete this data?</p>
                <input type="hidden" id="dataID">
                <input type="hidden" id="bhouseID">

                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btnYes">Yes</button>
                <button type="button" class="btn btn-secondary" id="closeModal">No</button>
            </div>
        </div>
    </div>
</div>


<script src=" {{ asset('/js/datatables.min.js') }}"></script>

<script>
        
        

        document.getElementById('btnYes').addEventListener('click',function(){
            
            let id = $('#dataID').val();
            let bhouse_id = $('#bhouseID').val();
    
           axios.delete('/bhouse-view-bed/'+ id ).then(res=>{
                if(res.status === 200){
                    alert('Data successfully Deleted.');
                    window.location = '/bhouse-view-bed/'+ bhouse_id;
                }
            });
             
                    
                    
         });

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
                { data: 'bhouse_id' , 'visible': false},
                { data: 'bedroom_name'},
                { data: 'bed_amenities' },
                { data: 'price' },
                { data: 'is_available' },
                
                
                {
                    defaultContent: '<button class="btn btn-warning btn-sm" id="edit">Edit</button><button class="btn btn-danger btn-sm" id="btnDelete" data-toggle="modal">Delete</button>'
                }
            ]
        });
        
    
    $('#bedrooms tbody').on( 'click', '#edit', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var id = data['bedroom_id'];
        window.location = '/bhouse-edit-bed/' + id + '/edit';

    });//criteria click edit

    $('#bedrooms tbody').on( 'click', '#btnDelete', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var id = data['bedroom_id'];
        var bhouse_id = data['bhouse_id'];
        $('#dataID').val(id);
        $('#bhouseID').val(bhouse_id);
        $('#btnDialog').modal('toggle');
        

        // axios.delete('/admin-dashboard/'+ id ).then(res=>{
        //         if(res.status === 200){
        //             alert('Data successfully Deleted.');
        //             window.location = '/admin-dashboard';
        //         }
        //     });

    });//criteria click delete

    $('#closeModal1').click(function (){
        $('#btnDialog').modal('toggle');
    });
    $('#closeModal').click(function (){
        $('#btnDialog').modal('toggle');
    });

   
   
    
  } ); //close document ready
</script>

@endsection