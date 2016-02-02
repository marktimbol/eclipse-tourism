var React = require('react');

var EmptyShoppingCart = React.createClass({
	render() {
		return (
			<div className="alert alert-info">
				Your Shopping Cart is empty. Please <a href="/packages">book a package</a> first. Or you may <a href="/contact">contact one of our customer representative</a>.
			</div>
		);
	}
});

export default EmptyShoppingCart;