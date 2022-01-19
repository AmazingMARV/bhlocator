@extends('layouts.client')
@section('content')
<link rel="stylesheet" href="{{ asset('/css/leaflet.css ') }}">
<div class="bhouse-header mt-5">
  <h2>{{$bhouses->bhouse_name}}</h2>
</div>

<div class="bh-container">
  <div class="col-md-7">
    <ul class="nav nav-tabs mb-3">
      <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#bed">Bed</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#desc">Description</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#house_rule">House Rule</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#comment-pane">Comments and Review</a></li>
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
          <div class="myPagination mt-4">
              {{$beds->links()}}
          </div>

          
          <p>Location</p>
          <div id="mapid"></div>
        </div>
      </div> <!-- tab pane end div-->
     
      <!-- Location -->
      <div class="tab-pane" id="loc">
        <div class="row">
          <div class="col">
            <h3 class="mb-3">Location</h3>
            <div id="mapid"></div>
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
      <div class="tab-pane" id="comment-pane">
        <div class="row">
          <div class="col">
            <h3 class="mb-3">Comment and Review</h3>
            <p>Total Reviews: {{$total_review}}</p>
            <h4>Star Rating:</h4>
            <!--one star-->
            <P>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              - {{$star_1}}
            </P>
            <!--two star-->
            <P>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              - {{$star_2}}
            </P>
            <!--three star-->
            <P>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              - {{$star_3}}
            </P>
            <!--four star-->
            <P>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-gray" aria-hidden="true"></i>
              - {{$star_4}}
            </P>

            <!--five star-->
            <P>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              <i class="fa fa-star color-yellow" aria-hidden="true"></i>
              - {{$star_5}}
            </P>

            
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Leave a Comment
              </button>
              @foreach($comments as $comment)
                <div class="card mb-3" style="max-width: 540px;"> <!--card-->
                  <div class="row no-gutters">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">{{ $comment->fname }}, {{ $comment->lname }}</h5>
                        @for($i=1;$i<=5;$i++)
                          @if($i<=$comment->rating)
                          <i class="fa fa-star color-yellow" aria-hidden="true"></i>
                          @else
                          <i class="fa fa-star color-gray" aria-hidden="true"></i>
                          @endif
                         @endfor
                        <p class="card-text mt-3">{{ $comment->comment }}</p>
                        <p class="card-text"><small class="text-muted">{{date('m-d-y h:i A' , strtotime($comment->created_at))}}</small></p>
                      </div>
                    </div>
                  </div>
                </div> <!--end card-->
              @endforeach
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
                            <textarea class="form-control" placeholder="Leave a comment here" id="comment_here" style="height: 100px"></textarea>
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

<script src="{{ asset('/js/leaflet.js') }}"></script>


<script>

  //initiate map
  var mymap = L.map('mapid').setView([{{ $bhouses->loc_x }},{{ $bhouses->loc_y }}], 17);
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZXRpZW5uZXdheW5lIiwiYSI6ImNrcno0N29seTE2bG0yd2szOXl5OXZ0ZWsifQ.xlNi77GcJmddd9UZTz1Hpw', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: ''
  }).addTo(mymap);

  var theMarker = {};
  //this will show the Location
  theMarker = L.marker([{{ $bhouses->loc_x }},{{ $bhouses->loc_y }}]).addTo(mymap);
      
  function submitComment(){
    let rating = document.getElementsByName('rating');
    let bhouse_id = document.getElementById('bhouse_id');
    let comment = document.getElementById('comment_here');
    var rate_value;

      for(var i = 0; i < rating.length; i++){
        if(rating[i].checked){
        rate_value = rating[i].value;
        }
      }


    var fields = {
      comment: comment_here.value,
      bhouse_id: bhouse_id.value,
      rate_value: rate_value,

    };
   
    axios.post('/add-comment', fields).then(res=>{ 
      if(res.status === 200){
      alert('Comment Successfully!');
      window.location = '/client-boarding-house-info/{{$bhouses->bhouse_id}}' ;
      }
    });

  }

  // comment = document.getElementById('comment');

  // axios.get('/client-boarding-house-info-comments?bid={{$id}}').then(res=>{ 
  //    console.log(res.data.data.length);
  //    for (var i = 0; i < res.data.data.length; i++){
  //      comment.innerHTML += '<div>' + res.data.data[i].comment + '</div>';
  //    }
    
  //   });

 
 
</script>
@endsection