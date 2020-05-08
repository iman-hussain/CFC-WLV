@extends('/layout')
@section('title')
About
@endsection('title')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item">
      <img class="d-block mx-auto img-fluid" src={{ asset('img/carousel/1.jpg') }} alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        <h4 class="display-4">Submit</h4>
        <h4>Think your fit is sick?</h4>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block  mx-auto mg-fluid" src={{ asset('img/carousel/2.jpg') }} alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
      <h4 class="display-4">Vote</h4>
        <h4>Decide who else is #trendings</h4>
        </div>
    </div>
    <div class="carousel-item active">
      <img class="d-block  mx-auto img-fluid" src={{ asset('img/carousel/3.jpg') }} alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
      <h4 class="display-4">API</h4>
        <h4>A direct feed of what hot.</h4>
        </div>
    </div>
  </div>
  <div class="container py-5 mb5">
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  <div class="container py-5 mb5">
<h1 class="mb-5"><h1 class="display-4">About</h1></h1>
</div>
</div>

@endsection