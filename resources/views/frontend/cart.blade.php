@extends('frontend.master')

@section('content')
<div class="row">
<div class="container" style="margin-top: 100px">
		<!-- Shopping Cart Display -->
		<div class="divShoppincart">
			<table class="table table-bordered">
			<thead>
				<th>No.</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Price</th>
				<th>Sub</th>
				<th>Qty</th>
				<th>Add</th>
				<th>Action</th>
				<th>Subtotal</th>
			</thead>
			<!-- <tbody id="shoppingcartTable"> -->
			<tbody id="shoppingcartTable">
				
			</tbody>
			<tfoot id="shoppingcartTfoot"></tfoot>
		</table>
		</div>
		<!-- Empty Shopping Cart -->
		<div class="nonedivShoppingcart">
			<h3 class="text-center">There is no items for checkout please order some items!</h3>
		</div>
	</div>
	
@endsection
</div>