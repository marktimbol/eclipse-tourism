var React = require('react');
var currentCurrency = $('meta[name="current_currency"]').attr('content');

import BookedItem from './BookedItem';

var BookedItems = React.createClass({

	render() {

		var total = 0;
		var key = 0;

		var bookedItems = this.props.bookedItems.packages.map( function(item) {
				var adultPrice = item.adult_price;
				var adultQuantity = item.pivot.adult_quantity;

				var childPrice = item.child_price;
				var childQuantity = item.pivot.child_quantity;

				total += ( adultPrice * adultQuantity ) + (childPrice * childQuantity );

		    return (
			    <BookedItem key={++key} item={item} />
		    );
		});

		return (
			<div className="orders card-panel">
				<h5 className="mb-35 orders__title">
					Your Bookings 
				</h5>
				
				{ bookedItems }

				<hr />

				<h5 className="orders__total">Total: { currentCurrency + parseFloat(total).toFixed(2) }</h5>

			</div>
		);
	}
});

export default BookedItems;