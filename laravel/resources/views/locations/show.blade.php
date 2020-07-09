@extends('/layout')
@section('title')
Location
@endsection('title')
@section('content')
<div class="container py-5 mb5">
<h1 class="mb-5"><h1 class="display-4">LOCATION - {{$location-> location}}</h1></h1>
        <div class="row">
                <div class="col-md-8 col-lg-8">
                        <div class="card">
                                <h2>My Map</h2>
                                <div id="map" class="map">
                                </div>
                                <script type="text/javascript">
                                        var map = new ol.Map({
                                                target: 'map',
                                                layers: [
                                                        new ol.layer.Tile({
                                                                source: new ol.source.OSM()
                                                        })
                                                ],
                                                view: new ol.View({
                                                        center: ol.proj.fromLonLat([52.48, -1.9025]),
                                                zoom: 4
                                                })
                                        });
                                </script>
                        </div>
                </div>
                <div class="col-md-4 col-lg-4"> 
                        <div class="card">
                                <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">Food</li>
                                                <li class="list-group-item list-group-item-action">Bread: {{$location-> eggs}}</li>
                                                <li class="list-group-item list-group-item-action">Milk: {{$location-> milk}}</li>
                                                <li class="list-group-item list-group-item-action">Eggs: {{$location-> eggs}}</li>
                                                <li class="list-group-item list-group-item-action">Fruit/Veg: {{$location-> fruit}}</li>
                                        <li class="list-group-item list-group-item-primary">Toiletries</li>
                                                <li class="list-group-item list-group-item-action">Toilet Paper: {{$location-> tp}}</li>
                                                <li class="list-group-item list-group-item-action">Fem Hygiene: {{$location-> pads}}</li>
                                                <li class="list-group-item list-group-item-action">Soap: {{$location-> soap}}</li>
                                                <li class="list-group-item list-group-item-action">Cleaner: {{$location-> cleaner}}</li>
                                        <li class="list-group-item list-group-item-primary">Conditions</li>
                                                <li class="list-group-item list-group-item-action">Wait Time: {{$location-> busy}}</li>
                                                <li class="list-group-item list-group-item-action">Price: {{$location-> cost}}</li>
                                </ul>
                        </div>
                        <div>
                        <a href="/location/{{$location->id}}/edit" class="btn btn-block btn-secondary">Edit</a>
                        <a href="/location/{{$location->id}}/delete" class="btn btn-block btn-danger">Delete</a>
                        </div>
                </div>
        </div>
</div>
@endsection