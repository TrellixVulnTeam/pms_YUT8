@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">add shelf</div>


<form action="{{route('store-shelf')}}" method="POST">
	@csrf
  <div class="form-group">
    <label for="number">Number:</label>
    <input type="text" class="form-control" placeholder="Enter number" id="number" name="number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
