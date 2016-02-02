var React = require('react');

var CheckoutLink = React.createClass({
	render() {
		return (
			<p className="center-content">
				<a href={this.props.link} className="btn btn-large waves-effect waves-light green full-width">
					Checkout
				</a>
			</p> 
		);
	}
});

export default CheckoutLink;