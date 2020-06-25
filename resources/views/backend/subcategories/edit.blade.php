@extends('backend.master')

@section('content')

<div class="row">
	<h1 class="px-5">Create Form</h1>
</div>
<div class="card shadow mt-4">
	<div class="card-header">
		<div class="row">
			<div class="col-lg-10 pt-2">
				<h5>New SubCategory</h5>
			</div>
			<div class="col-lg-2">
				<a href="{{route('subcategories.index','$subcategory->id')}}" class="btn btn-primary float-right">Back</a>
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
		<form action="{{route('subcategories.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
				<label for="name" class="col-lg-2">Name:</label>
				<div class="col-lg-10">
					<input type="text" name="name" id="name" placeholder="SubCategory Name" value="{{$subcategory->name}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-2">Category:</label>
				<div class="col-lg-10">
					<select name="catID">
						@foreach($category as $row)
						<option value="{{$row->id}}" 
							@if($subcategory->category_id == $row->id) 
							{{'selected'}} @endif>{{$row->name}}</option>
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