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
       

        <!-- Modal -->
        <div class="modal fade" id="businessPermitModal" tabindex="-1" role="dialog" aria-labelledby="businessPermitModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="businessPermitModal">Business Permit</h5>
                        <button type="button" class="close" id="closeModal1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Business Permit</h2>


                        <img src="" id="imgpath" class="rounded mx-auto d-block" alt="...">
                        <input type="text" id="dataID">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="closeModal">Close</button>
                        <button type="button" class="btn btn-danger" id="btnDisapprove">Disapprove</button>
                        <button type="button" class="btn btn-primary" id="btnApprove">Approve</button>
                    </div>
                </div>
            </div>
        </div>


<script src=" {{ asset('/js/datatables.min.js') }}"></script>

<script>

    document.getElementById('btnApprove').addEventListener('click',function(){
            
        let id = $('#dataID').val();

        axios.put('/approve-account-owner/' + id).then(res=>{
                if(res.data.status === 'updated'){
                    alert('Account has been approved.');
                    window.location = '/admin-approve';
                }
            });
         
                
                
     });

     
    document.getElementById('btnDisapprove').addEventListener('click',function(){
            
            let id = $('#dataID').val();
    
            axios.put('/disapprove-account-owner/' + id).then(res=>{
                    if(res.data.status === 'updated'){
                        alert('Account has been disapproved.');
                        window.location = '/admin-approve';
                    }
                });
             
                    
                    
         });



   $(document).ready(function() {

        var table = $('#users').DataTable({
            processing: true,
            ajax: {
                url: '/ajax-admin-approve',
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
                    defaultContent: '<button class="btn btn-warning btn-sm" data-toggle="modal" id="buttonModal">View Business Permit'
                }
            ]
        });
        
    
    $('#users tbody').on( 'click', '#buttonModal', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var id = data['user_id'];
        
        axios.get('/get-business-img/'+ id ).then(res=>{
            var imgPath = res.data.business_permit_img;
            $('#businessPermitModal').modal('toggle');
            $('#imgpath').attr('src','/storage/bpermit/' + imgPath);
            $('#dataID').val(id);
        });
        
       

    
    });//criteria for modal 

    $('#closeModal').click(function (){
        $('#businessPermitModal').modal('toggle');
    });

    $('#closeModal1').click(function (){
        $('#businessPermitModal').modal('toggle');
    });

   
    
  }); //close document ready
</script>

@endsection