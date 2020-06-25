$(document).ready( function() {
	// cartnoti();
	showTable();

	// Store Data into Local Storage
	$('.addtocart').on('click', function() {
		var id = $(this).data('id');rowrowrow
		var codeno = $(this).data('codeno');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var discount = $(this).data('discount');

		var item = {
			id: id,
			codeno: codeno,
			name: name,
			price: price,
			photo: photo,
			discount: discount,
			qty : 1
		}

		var itemString = localStorage.getItem('itemlist');
		var itemArr;

		if (itemString == null) {
			itemArr = Array();
		} 
		else {
			itemArr = JSON.parse(itemString);
		}

		var status = false;
		$.each(itemArr, function(i,v) {
			if (id == v.id) {
				status = true;
				v.qty++;
			}
		})

		if (status!=true) {
			itemArr.push(item);
		}

		var itemData = JSON.stringify(itemArr);
		localStorage.setItem('itemlist', itemData);
		// cartnoti();
	})
})


 // Function for shopping cart notification
 // function cartnoti() {
 // 	var itemString = localStorage.getItem('itemlist');

 // 	if (itemString) {
 // 		var itemArr = JSON.parse(itemString);
 // 		var count = 0;
 // 		$.each(itemArr, function(i,v) {
 // 			var qty = v.qty;
 // 			count+=parseInt(qty);

 // 			$('.cartnoti').html(count);
 // 		})
 // 	}
 // 	else {
 // 		$('.cartnoti').text('');
 // 	}
 // }

// Function for showing Data from local Storage and display with table
function showTable() {
	// console.log("i am working");
	var itemString = localStorage.getItem('itemlist');
	if (itemString) {
		var itemArr = JSON.parse(itemString);
		if (itemArr!=null) {
			var mytable = '';
			var mytfoot = '';
			var total = 0;
			var num = 1;
			$.each(itemArr, function(i,v) {
				if (v) {
					var id = v.id;
					var codeno = v.codeno;
					var name = v.name;
					var price = v.price;
					var discount = v.discount;
					var photo = v.photo;
					var qty = v.qty;

					if (discount>0) {
						var unit = discount;
					}
					else {
						var unit = price;
					}

					var subtotal = unit*qty;
					mytable += `<tr>
					<td>
					${num++}
					</td>
					<td>
					<p>${name}</p>
					<p>${codeno}</p>
					</td>
					<td>
					<img src="${photo}" class="img-fluid" style="width:50px; height:50px;">
					</td>
					<td>`
					if (discount > 0) {
						mytable += `<h5 class="text-danger"> ${discount} MMK </h5>
						<p class="font-weight-lighter"> <del>${price}</del></p>`;
					}
					else {
						mytable += `<p>${price} MMK</p>`;
					}
					mytable += `</td>
					<td>
					<button class="btn btn-outline-secondary minus_btn" data-id="${i}">
					<i class="fas fa-minus"></i></button>
					</td>
					<td>
					<p>${qty}</p>
					</td>
					<td>
					<button class="btn btn-outline-secondary plus_btn" data-id="${i}">
					<i class="fas fa-plus"></i></button>
					</td>
					<td>
					<button class="btn btn-outline-danger remove" data-id="${i}">
					<i class="fas fa-times"></i></button>
					</td>`;
					
					mytable+=`<td><h5 class="text-success">${subtotal} MMK</h5 class="text-success"></td>
					</tr>`;

				}

				total+=subtotal;

			});

			mytfoot=`<tr>
			<td colspan="9">
			<h3 class="text-right"> Total: &nbsp; ${total} MMK </h3>
			</td>
			</tr>
			<tr>
			<td colspan="6">
			<textarea class="form-control" id="notes" placeholder="Any Message you want to leave for us"></textarea>
			</td>
			<td colspan="3">
			<button class="btn btn-secondary btn-block btnCheckout"
			data-total=${total} style="background-color: #673AB7; border-color: #673AB7; margin-top: 10px;">
			Check Out </button>
			</td>
			</tr>`;
			$('.divShoppingcart').show();
			$('.nonedivShoppingcart').hide();

			$('#shoppingcartTable').html(mytable);
			$('#shoppingcartTfoot').html(mytfoot);
		}
		else {
			$('.divShoppingcart').hide();
			$('.nonedivShoppingcart').show();
		}
	}
	else {
		$('.divShoppingcart').hide();
		$('.nonedivShoppincart').show();
	}
}

// Remove Button Function

$('#shoppingcartTable').on('click', '.remove', function() {
	var id = $(this).data('id');
	var itemString = localStorage.getItem('itemlist');
	if (itemString) {
		var itemArr = JSON.parse(itemString);
		if (itemArr) {
			$.each(itemArr, function(i,v) {
				if (id == i) {
					itemArr.splice(id, 1);
				}
			})
			
		}
		var itemData = JSON.stringify(itemArr);
			localStorage.setItem('itemlist', itemData);
			
			cartnoti();
			showTable();
	}
	
})

//Add Quantity

$('#shoppingcartTable').on('click', '.plus_btn', function() {
	var id = $(this).data('id');
	var itemString = localStorage.getItem('itemlist');
	if (itemString) {
		var itemArr = JSON.parse(itemString);
	if (itemArr) {
		$.each(itemArr, function(i,v) {
		if (id == i) {
			v.qty++;
		}
	})
	var itemData = JSON.stringify(itemArr);
	localStorage.setItem('itemlist', itemData);
	showTable();
	cartnoti();
	}
	}
})

// Remove Quantity

$('#shoppingcartTable').on('click', '.minus_btn', function() {
	var id = $(this).data('id');
	var itemString = localStorage.getItem('itemlist');
	if (itemString) {
		var itemArr = JSON.parse(itemString);
	if (itemArr) {
		$.each(itemArr, function(i,v) {
		if (id == i) {
			v.qty--;
			if (v.qty == 0) {
				itemArr.splice(id, 1);
			}
		}
	})
	var itemData = JSON.stringify(itemArr);
	localStorage.setItem('itemlist', itemData);
	showTable();
	cartnoti();
	}
	}
})

// Checkout Process

$('#shoppingcartTfoot').on('click', '.btnCheckout', function() {
	var notes = $('#notes').val();
	var total = $(this).data('total');

	var itemString = localStorage.getItem('itemlist');
	var itemArr = JSON.parse(itemString);

 	// console.log(notes);
 	// console.log(total);
 	// console.log(itemArr);

 	$.post('storeorder.php', {
 		cart : itemArr,
 		notes : notes,
 		total : total
 	}, function(response) {
 		// local storage clear
 		localStorage.clear();
 		location.href="ordersuccess.php";
 	})
 })