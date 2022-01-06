@extends('layouts.client')
@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/NMSC.jpg" alt="">

        <div class="container">
          <div class="carousel-caption text-start">
           
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/NMSC1.jpg" alt="">

        <div class="container">
          <div class="carousel-caption">
           
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/NMSC.jpg" alt="">

        <div class="container">
          <div class="carousel-caption text-end">
           
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


    <div class="container">
      <div class="d-flex debug">
        <div class="p-2">
          <h2>Boarding Houses</h2>
        </div>
        <div class="ms-auto p-2">
          <form action="" class="input group">
            <div class="input-group rounded">
              <input type="text" class="form-control rounded" name="query" placeholder="Search" aria-label="Search"
              aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="fa fa-search"></i>
              </span>
            </div>
          </form>
        </div>
      </div>
      <hr>
        <div class="client-bhouse-wrapper">
            @foreach($bhouses as $bhouse)
            <div class="bhouse-card">
                <div class="img-container">
                    <img src="/storage/bhouses/{{$bhouse->bhouse_img}}" alt="bhouse" height="250"/>
                </div>
                <div class="text-center p-font">
                    <p>{{ $bhouse->bhouse_name }}</p> 
                </div>
                <div class="p-bhousedesc">
                    <p>{{ $bhouse->bhouse_desc }}</p>
                </div>
                <div class="button-container">
                    <a href="/client-boarding-house-info/{{ $bhouse->bhouse_id }}" class="btn btn-secondary">Click To Visit</a>
                </div>
            </div>
            @endforeach
        </div> <!--close bhouse-warpper-->
        
    </div> <!-- close container-->
    <!-- Pagination-->
    <div class="myPagination mt-4">
        {{$bhouses->links()}}
    </div>
    
    

<script>

</script>
@endsection
