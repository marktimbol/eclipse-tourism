var React = require('react');

var CheckoutLink = React.createClass({
	render() {
		return (
			<div className="row">
				<div className="col s6 m3 right">
					<p className="">
						<a href={this.props.link} className="btn btn-large waves-effect waves-light green full-width">
							<i className="material-icons left">shopping_cart</i> Checkout
						</a>
					</p> 
				</div>
			</div>
		);
	}
});

export default CheckoutLink;