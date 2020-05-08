@extends('/layout')
@section('title')
Home
@endsection('title')
@section('content')
<div class="jumbotron jumbotron-fullheight jumbo-vertical-center text-light text-center bg-dark mb-0 radius-0">
  <div class="container">

      <h2 class="display-4 text-light text-uppercase">Food Shopping Done Smart</h2>
      <span class="lead lead-lg">Supporting Local Food Sellers & Maintaining Social Distancing</span>

      <div class="mt-4">
        <a href="/submit"
           class="btn btn-secondary btn-lg m-2 btn-wide">
          <span>submit</span>
        </a>

        <a href="/location"
           class="btn btn-outline-light btn-hover-text-dark btn-wide btn-lg m-2">
          <span>location</span>
        </a>
      </div>
  </div>
</div>
@endsection('content')