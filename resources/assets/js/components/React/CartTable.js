var React = require('react');
var ReactDOM = require('react-dom');
var numeral = require('numeral');

import CartItem from './CartItem';
import CheckoutLink from './CheckoutLink';
import EmptyShoppingCart from './EmptyShoppingCart';
import ChangeCurrencyForm from './ChangeCurrencyForm';
import Amount from './Amount';

var siteUrl = $('meta[name="site_url"]').attr('content');
var csrfToken = $('meta[name="token"]').attr('content');
var currentCurrency = $('meta[name="current_currency"]').attr('content');

var CartTable = React.createClass({

	getInitialState() {
		return {
			cartItems: null,
			cartCount: 0,
			total: window.total,
			convertedTotal: window.total,
			loaded: true,
			selectedCurrency: 'AED'
		}
	},

	componentDidMount() {
		this.fetchCartItems();
		this.getTotal();
		this.convertAmount(this.state.selectedCurrency);
	},

	componentWillUnmount() {
		console.log('componentWillUnmount');
	},

	fetchCartItems() {
		$.get('/api/v1/cart', function (data) {
			this.setState({
				cartItems: data,
				cartCount: data.length
			});
		}.bind(this));
	},

	getTotal() {
		$.get('/api/v1/cart/total', function (data) {
			this.setState({
				total: data
			});
		}.bind(this));
	},

	convertAmount(currency) {
		var url = '/api/v1/convert-amount/' + this.state.total + '/' + currency;

		$.get(url, function (response) {
			this.setState({
				convertedTotal: response,
				loaded: true
			});
		}.bind(this));
	},

	// handleChangeCurrency(currency) {
	// 	this.setState({ loaded: false });
	// 	this.setState({ selectedCurrency: currency });

	// 	this.getTotal();
	// 	this.convertAmount(currency);
	// },

	updateCartItem(rowId, adultQuantity, childQuantity) {
		
		var url = '/cart/' + rowId;

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
				this.setState({ cartItems: response });
				this.setState({ cartCount: response.length });

				swal({	
					title: "Eclipse Tourism",  
					text: 'Item was successfully updated on your cart.',  
					type: "success", 
					timer: 2000,
					showConfirmButton: false
				});

				this.getTotal();
				this.fetchCartItems();
				// this.handleChangeCurrency(this.state.selectedCurrency);

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
		var deleteUrl = siteUrl + 'cart/' + rowId;

		$.ajax({
			url: deleteUrl,
			type: 'DELETE',
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.getTotal();
				this.setState({ cartItems: response });
				this.setState({ cartCount: response.length });

				this.getTotal();
				this.fetchCartItems();
				// this.handleChangeCurrency(this.state.selectedCurrency);
			}.bind(this),
			error: function(xhr, status, err) {
				console.log(err)
			}.bind(this)
		});

		$('#item'+rowId).closeModal();
		
	},

	render() {
		if( this.state.cartItems == null )
		{
			return (
				<div>
					<i className="fa fa-spinner fa-spin"></i> Loading
				</div>
			)
		}

		var cartItems = Object.keys(this.state.cartItems).map(function(item) {
		    return (
			    <CartItem key={item} item={this.state.cartItems[item]} 
			    	updateCartItem={this.updateCartItem} 
			    	deleteCartItem={this.deleteCartItem} />
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
								
				<h5 className="right">
					Total: &nbsp;&nbsp;
					{ currentCurrency + ' ' + numeral(this.state.total).format('0,0') }			
				</h5>
				
				<p>&nbsp;</p>
				<p>&nbsp;</p>

				<p>&nbsp;</p>
				<p>&nbsp;</p>	

				<div className="row">
					<div className="col s12 m12">
						{ this.state.cartCount !== 0 ? <CheckoutLink link="/cart/checkout" /> : <EmptyShoppingCart /> }
					</div>
				</div>	
			</div>
		);
	}
});

ReactDOM.render(
	<CartTable />,
	document.getElementById('CartTable')
);