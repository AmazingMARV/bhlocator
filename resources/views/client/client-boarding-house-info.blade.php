@extends('layouts.client')
@section('content')
<div class="bhouse-header mt-5">
  <h2>{{$bhouses->bhouse_name}}</h2>
</div>

<div class="bh-container">
  <div class="col-md-7">
    <ul class="nav nav-tabs mb-3">
      <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#bed">Bed</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#loc">Location</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#desc">Description</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#house_rule">House Rule</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#comment">Comments and Review</a></li>
    </ul> 
    <div class="tab-content">
      <!-- Bed -->
      
      <div class="tab-pane active" id="bed">
        <div class="row">
          <div class="col">
          @foreach($beds as $bed)
            <div class="card mb-3" style="max-width: 850px;"> <!--card-->
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="/storage/beds/{{$bed->bed_img}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Bed Name: <br>{{$bed->bedroom_name}}</h5>
                    <p class="card-text">Amenities: <br>{{$bed->bed_amenities}}</p>
                    <p class="card-text"><small>Price: <br> ₱ {{$bed->price}} / month</small></p>
                  </div>
                </div>
              </div>
            </div> <!--card-->
            @endforeach
          </div> <!-- end div-->
        </div>
      </div> <!-- tab pane end div-->
     
      <!-- Location -->
      <div class="tab-pane" id="loc">
        <div class="row">
          <div class="col">
            <h3 class="mb-3">Location</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
      </div> <!-- tab pane end div-->

      <!-- Description -->
      <div class="tab-pane" id="desc">
        <div class="row">
          <div class="col">
            <h3 class="mb-3">Description</h3>
            <p>{{ $bhouses->bhouse_desc }}</p>
          </div>
        </div>
      </div> <!-- tab pane end div-->

      <!-- House Rules -->
      <div class="tab-pane" id="house_rule">
        <div class="row">
          <div class="col">
            <h3 class="mb-3">House Rule</h3>
            <p>{{ $bhouses->bhouse_rule }}</p>
          </div>
        </div>
      </div> <!-- tab pane end div-->

      <!-- Comment and Review  -->
      <div class="tab-pane" id="comment">
        <div class="row">
          <div class="col">
            <h3 class="mb-3">Comment and Review</h3>
            
              <div class="comment-container">
                <p>Total Reviews:</p>
                <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Leave a Comment
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Leave a comment</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div>
                            <p>Rate:</p>
                            <input type="hidden" id="bhouse_id" value="{{ $bhouses->bhouse_id }}">
                            
                            

                          </div>
                          <div class="rating-css">
                            <div class="star-icon">
                                <input type="radio" value="1" name="rating" checked id="rating1">
                                <label for="rating1" class="fa fa-star"></label>
                                <input type="radio" value="2" name="rating" id="rating2">
                                <label for="rating2" class="fa fa-star"></label>
                                <input type="radio" value="3" name="rating" id="rating3">
                                <label for="rating3" class="fa fa-star"></label>
                                <input type="radio" value="4" name="rating" id="rating4">
                                <label for="rating4" class="fa fa-star"></label>
                                <input type="radio" value="5" name="rating" id="rating5">
                                <label for="rating5" class="fa fa-star"></label>
                            </div>
                          </div>
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="comment" style="height: 100px"></textarea>
                            <label for="Comment">Comment</label>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="submitComment()">Save</button>
                        </div>
                      </div>
          </div>
        </div>
      </div> <!-- tab pane end div-->

    </div> <!--end col div-->
  </div> <!-- col end div-->
</div> <!-- container end div-->

<script>
  function submitComment(){
    let rating = document.getElementsByName('rating');
    let bhouse_id = document.getElementById('bhouse_id');
    let comment = document.getElementById('comment');

        var rate_value;

        for(var i = 0; i < rating.length; i++){
            if(rating[i].checked){
                rate_value = rating[i].value;
            }
        }
       

        var fields = {
          comment: comment.value,
          bhouse_id: bhouse_id.value,
          rate_value: rate_value,
              
                };
            
          

            axios.post('/add-comment', fields).then(res=>{ 
                if(res.status === 200){
                    alert('Comment Successfully!');
                    // window.location = '/client-boarding-house-info/' + id + ;
                }
            });

  }
</script>
@endsection