@extends('backend.master')

@section('content')

<div class="row">
	<h1 class="px-5">Create Form</h1>
</div>
<div class="card shadow mt-4">
	<div class="card-header">
		<div class="row">
			<div class="col-lg-10 pt-2">
				<h5>New Item</h5>
			</div>
			<div class="col-lg-2">
				<a href="{{route('items.index')}}" class="btn btn-primary float-right">Back</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<!-- Error Validation -->
		@if ($errors->any())
		 <div class="alert alert-danger">
		 	<ul>
		 		@foreach ($errors->all() as $error)
		 		<li>{{ $error }}</li>
		 		@endforeach
		 	</ul>
		 </div>
		 @endif
		 <!-- End Validation -->
		<form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
				<label for="name" class="col-lg-2">Name:</label>
				<div class="col-lg-10">
					<input type="text" name="name" id="name" placeholder="Enter Item Name" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="codeno" class="col-lg-2">Codeno:</label>
				<div class="col-lg-10">
					<input type="text" name="codeno" id="codeno" placeholder="Enter Codeno" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="photo" class="col-lg-2">Image:</label>
				<div class="col-lg-10">
					<input type="file" name="photo" id="photo" class="img-fluid w-25">
				</div>
			</div>
			<div class="form-group row">
				<label for="price" class="col-lg-2">Price:</label>
				<div class="col-lg-10">
					<input type="number" name="price" id="price" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="discount" class="col-lg-2">Discount:</label>
				<div class="col-lg-10">
					<input type="number" name="discount" id="discount" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="description" class="col-lg-2">Description:</label>
				<div class="col-lg-10">
					<textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="subcategory" class="col-lg-2">Subcategory:</label>
				<div class="col-lg-10">
					<select name="subcategory_id" class="form-control">
						@foreach($subcategories as $row)
						<option value="{{$row->id}}">{{$row->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="brand" class="col-lg-2">Brand:</label>
				<div class="col-lg-10">
					<select name="brand_id" class="form-control">
						@foreach($brands as $row)
						<option value="{{$row->id}}">{{$row->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-lg-2"></div>
				<div class="col-lg-10">
					<input type="submit" value="Save" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>

@endsection