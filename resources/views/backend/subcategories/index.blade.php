@extends('backend.master')

@section('style')
<!-- Custome Styles for this page -->
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')

<div class="row">
	<h1 class="px-5">Index Page</h1>
</div>
<div class="card shadow mt-4">
	<div class="card-header">
		<div class="row">
			<div class="col-sm-10 mt-2">
				<h5>SubCategory Lists</h5>
			</div>
			<div class="col-sm-2">
				<a href="{{route('subcategories.create')}}" class="btn btn-primary float-right">Add New</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable">
				<thead>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
			
					@foreach($subcategory as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>
							{{$row->name}}
						</td>
						<td>
							{{$row->cname}}
						</td>
						<td>
							<a href="{{route('subcategories.edit', $row->id)}}" class="btn btn-warning">Edit</a>

							<form action="{{route('subcategories.destroy', $row->id)}}" method="POST" onsubmit="return confirm('Are you Sure?')">
								@csrf
								@method('DELETE')
								<input type="submit" value="Delete" class="btn btn-danger">
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>

@endsection

@section('script')

 <!-- Page Level Plugins -->
 <script src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{asset('backendtemplate/js/demo/datatables-demo.js')}}"></script>

@endsection