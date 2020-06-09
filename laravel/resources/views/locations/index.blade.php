@extends('/layout')
@section('title')
Location
@endsection('title')
@section('content')
<div class="container py-5 mb5">
<h1 class="mb-5"><h1 class="display-4">Location</h1></h1>
        <div class="row">
        @foreach ($locations as $location)
                <div class="col-md-4 col-lg-4">
                        <div class="card">
                                <img class="card-img-top" src="{{ asset('img/trending/bog.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                        <h2 class="card-title">{{$location-> location}}</h2>
                                </div>
                                <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">Food</li>
                                                <li class="list-group-item list-group-item-action">Bread: {{$location-> bread}}</li>
                                                <li class="list-group-item list-group-item-action">Eggs: {{$location-> eggs}}</li>
                                        <li class="list-group-item list-group-item-primary">Toiletries</li>
                                                <li class="list-group-item list-group-item-action">Toilet Paper: {{$location-> tp}}</li>
                                                <li class="list-group-item list-group-item-action">Soap: {{$location-> soap}}</li>
                                        <li class="list-group-item list-group-item-primary">Conditions</li>
                                                <li class="list-group-item list-group-item-action">Wait Time: {{$location-> busy}}</li>
                                                <li class="list-group-item list-group-item-action">Price: {{$location-> cost}}</li>
                                </ul>
                                <a href="location/ {{$location-> id}} " class="btn btn-secondary">View More</a>
                        </div>
                </div>
        @endforeach
        </div>
</div>
@endsection