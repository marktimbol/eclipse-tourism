var React = require('react');
var numeral = require('numeral');
var currentCurrency = $('meta[name="current_currency"]').attr('content');

import CheckoutItem from './CheckoutItem';

var CheckoutItems = React.createClass({

	render() {

		var total = 0;

		var checkoutItems = Object.keys(this.props.cartItems).map(function(item) {
			total += this.props.cartItems[item].subtotal;
			
		    return (
			    <CheckoutItem key={item} item={this.props.cartItems[item]} />
		    );

		}.bind(this));

		return (
			<div className="orders card-panel">
				<h5 className="mb-35 orders__title">
					Your Orders 
					<span className="edit-cart float-right">
						<a href="/cart" title="Edit cart">
							<i className="fa fa-pencil"></i>
						</a>
					</span>
				</h5>
				
				{ checkoutItems }

				<hr />

				<h5 className="orders__total">Total: { currentCurrency + ' ' + numeral(total).format('0,0') }</h5>

			</div>
		);
	}
});

export default CheckoutItems;