@extends('/layout')
@section('title')
Submit
@endsection('title')
@section('content')
<div class="container py-5 mb5">
        <h1 class="mb-5"><h1 class="display-4">EDIT - {{$location-> location}}</h1></h1>
        <form method="POST" action="/location/{{$location->id}}">
                @csrf
                @method('PUT')
                <h3 class="mb-3">Who?</h3>
                <div class="row">
                        <div class="col-md-6 mb-3">
                                <div class="field">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="Name" placeholder="{{$location-> name}}" required>
                                        <div class="invalid-feedback">
                                                Valid name is required.
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-6 mb-3">
                                <div class="field">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{$location-> email}}">
                                        <div class="invalid-feedback">
                                               Valid email is required.
                                        </div>
                                </div>
                        </div>
                </div>
                <hr class="mb-4">
                <h3 class="mb-3">Where?</h3>
                <div class="row">
                        <div class="col-md-6 mb-3">
                        <div class="field">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" name="location" id="location" placeholder="{{$location-> location}}">
                                        <div class="invalid-feedback">
                                               Valid location is required.
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-6 mb-3">
                                <div class="field">
                                        <label for="photo">Photo:</label>
                                        <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                </div>
                        </div>
                </div>
                <hr class="mb-4">
                <h3 class="mb-3">What?</h3>
                <h4 class="mb-3">Food</h4>
                <div class = "row">
                        <div class="col-6 col-md-3" align="center">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="bread" field_signature="5" form_signature="5" value="yes" name="bread">
                                        <label class="custom-control-label" for="bread">Bread</label>
                                </div>
                        </div>
                        <div class="col-6 col-md-3" align="center">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="milk" field_signature="6" form_signature="6" value="yes" name="milk">
                                        <label class="custom-control-label" for="milk">Milk</label>
                                </div>
                        </div>
                        <div class="col-6 col-md-3" align="center">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="eggs" field_signature="7" form_signature="7" value="yes" name="eggs">
                                        <label class="custom-control-label" for="eggs">Eggs</label>
                                </div>
                        </div>
                        <div class="col-6 col-md-3" align="center">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fruit" field_signature="8" form_signature="8" value="yes" name="fruit">
                                        <label class="custom-control-label" for="fruit">Fruit / Veg</label>
                                </div>
                        </div>
                </div>
                <h4 class="mb-3">Toiletries</h4>
                <div class = "row">
                        <div class="col-6 col-md-3" align="center">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tp" field_signature="1" form_signature="1" value="yes" name="tp">
                                        <label class="custom-control-label" for="tp">Toilet Paper</label>
                                </div>
                        </div>
                        <div class="col-6 col-md-3" align="center">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pads" field_signature="2" form_signature="2" value="yes" name="pads">
                                        <label class="custom-control-label" for="pads">Feminine Hygiene</label>
                                </div>
                        </div>
                        <div class="col-6 col-md-3" align="center">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="soap" field_signature="3" form_signature="3" value="yes" name="soap">
                                        <label class="custom-control-label" for="soap">Soap / Sanitiser</label>
                                </div>
                        </div>
                        <div class="col-6 col-md-3" align="center">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cleaner" field_signature="4" form_signature="4" value="yes" name="cleaner">
                                        <label class="custom-control-label" for="cleaner">Cleaner</label>
                                </div>
                        </div>
                </div>
                <hr class="mb-4">
                <h3 class="mb-3">How?</h3>
                <div class="row">
                        <div class="col-md-6 mb-3">
                                <div class="field">
                                        <h4 class="mb-3">Expensive</h4>
                                        <select class="custom-select" name="cost">
                                        <option selected="">Choose An Option</option>
                                        <option value="Cheap">Cheap</option>
                                        <option value="Average">Average</option>
                                        <option value="Expensive">Expensive</option>
                                        </select>
                                </div>
                        </div>
                        <div class="col-md-6 mb-3">
                                <div class="field">
                                        <h4 class="mb-3">Busy</h4>
                                        <select class="custom-select" name="busy">
                                        <option selected="">Choose An Option</option>
                                        <option value="No">No</option>
                                        <option value="A Little">A little</option>
                                        <option value="Not Very">Very</option>
                                        </select>
                                </div>
                        </div>
                </div>
                <hr class="mb-4">
                <button type="edit" class="btn btn-secondary btn-lg btn-block">Edit</button>
        </form>
</div>
@endsection