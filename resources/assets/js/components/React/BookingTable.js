var React = require('react');
var ReactDOM = require('react-dom');

var siteUrl = $('meta[name="site_url"]').attr('content');
var currentCurrency = $('meta[name="current_currency"]').attr('content');
var csrfToken = $('meta[name="token"]').attr('content');

import CartItem from './CartItem';
import CheckoutLink from './CheckoutLink';
import EmptyShoppingCart from './EmptyShoppingCart';

var BookingTable = React.createClass({

	getInitialState() {
		return {
			cartItems: [],
			cartCount: 0
		}
	},

	fetchCartItems() {
		$.ajax({
			url: '/api/v1/booking',
			type: 'GET',
			cache: false,
			success: function(response) {
				this.setState({ cartItems: response });
				this.setState({ cartCount: response.length });
			}.bind(this),
			error: function(xhr, status, err) {
				console.log(err)
			}.bind(this)
		});
	},

	updateCartItem(rowId, adultQuantity, childQuantity) {
		
		var url = '/booking/' + rowId;

		$.ajax({
			url: url,
			type: 'PUT',
			data: {
				rowId: rowId,
				adult_quantity: adultQuantity,
				child_quantity: childQuantity
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.setState({cartItems: response });
				this.setState({ cartCount: response.length });

				swal({
					title: "Eclipse Tourism",  
					text: 'Item was successfully updated on your cart.',  
					type: "success", 
					timer: 2000,
					showConfirmButton: false
				});

			}.bind(this),
			error: function(xhr, status, err) {
				swal({
					title: "Eclipse Tourism",  
					text: err.toString(),
					type: "error", 
					timer: 2000,
					showConfirmButton: false
				});
			}.bind(this)
		});

		$('#item'+rowId).closeModal();
	},

	deleteCartItem(rowId) {

		var deleteUrl = siteUrl + 'booking/' + rowId;

		$.ajax({
			url: deleteUrl,
			type: 'DELETE',
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.setState({ cartItems: response });
				this.setState({ cartCount: response.length });
			}.bind(this),
			error: function(xhr, status, err) {
				console.log(err)
			}.bind(this)
		});

		$('#item'+rowId).closeModal();
	},

	componentDidMount() {
		this.fetchCartItems();
		this.setState({ cartCount: Object.keys(this.state.cartItems).length });
	},

	render() {
		var total = 0;

		var cartItems = Object.keys(this.state.cartItems).map(function(item) {
			total += this.state.cartItems[item].subtotal;

		    return (
			    <CartItem key={item} item={this.state.cartItems[item]} updateCartItem={this.updateCartItem} deleteCartItem={this.deleteCartItem} />
		    );	
		}.bind(this));

		return (
			<div className="cart">
				<table className="striped bordered">
					<thead>
						<tr>
							<th>Package</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Subtotal</th>
							<th>&nbsp;</th>
						</tr>
					</thead>

					<tbody>
						{ cartItems }

						<tr>
							<td colSpan='5'>
								<p>
									<a href="/packages" className="btn waves-effect waves-light">
										<i className="fa fa-plus left"></i> Add Package
									</a>
								</p>
							</td>
						</tr>
					</tbody>
				</table>

				<p>&nbsp;</p>
				
				<h5 className="right">Total: { currentCurrency + parseFloat(total).toFixed(2) }</h5>

				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>	

				<div className="row">
					<div className="col s12 m12">
						{ this.state.cartCount !== 0 ? <CheckoutLink link="/booking/checkout" /> : <EmptyShoppingCart /> }
					</div>
				</div>	
			</div>
		);
	}
});

ReactDOM.render(
	<BookingTable />,
	document.getElementById('BookingTable')
);