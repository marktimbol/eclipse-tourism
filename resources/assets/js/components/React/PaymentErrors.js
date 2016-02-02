var React = require('react');

var PaymentErrors = React.createClass({

	render() {
		return (
			<div className="alert alert-danger payment-errors">
				{ this.props.message }
			</div> 
		);
	}
});

export default PaymentErrors;