@extends('layouts.owner')

@section('content')
<div class="container">

    <h3 class="mt-3 mb-3 d-flex justify-content-center">Boarding House / Apartment Listing</h3>


    <div class="bhouse-wrapper" >
        @foreach($bhouses as $bhouse)
            <div class="card" style="width: 18rem;" >
                <img class="card-img-top" src="/storage/bhouses/{{$bhouse->bhouse_img}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $bhouse->bhouse_name }}</h5>
                    <p class="card-text">{{ $bhouse->bhouse_desc }}</p>
                    <a href="/bhouse-view-bed/{{ $bhouse->bhouse_id}}" class="btn btn-primary">VIEW BED</a>
                </div>
                <div class="card-footer">
                    <a class="btn btn-warning" href="/dashboard/{{ $bhouse->bhouse_id }}/edit">EDIT</a>
                    <button class="btn btn-danger" onclick="confirmDelete({{ $bhouse->bhouse_id }})" id="btnDelete">DELETE</button>
                </div>
            </div>
        @endforeach
    </div>
    <!--Modal--!-->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete" aria-hidden="true">
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


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="btnYes">Yes</button>
                    <button type="button" class="btn btn-secondary" id="closeModal">No</button>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-success mt-3 btn-create-dashboard" href="/dashboard/create" role="button">ADD / NEW</a>
</div>

<script>
    var globalID = 0;

        document.getElementById('btnYes').addEventListener('click',function(){




           axios.delete('/dashboard/'+ globalID ).then(res=>{
                if(res.status === 200){
                    alert('Data successfully Deleted.');
                   window.location = '/dashboard'
                }
            });



         });

         function confirmDelete(id){
            globalID = id;
            $('#modalDelete').modal('toggle');

         }



    $('#closeModal1').click(function (){
        $('#modalDelete').modal('toggle');
    });
    $('#closeModal').click(function (){
        $('#modalDelete').modal('toggle');
    });
</script>
@endsection
