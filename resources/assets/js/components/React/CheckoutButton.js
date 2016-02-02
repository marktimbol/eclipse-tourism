var React = require('react');

var CheckoutButton = React.createClass({
	render() {
		return (
			<div>
				<div className="place-order-button">
					<button type="submit" className="btn btn-large waves-effect waves-light" disabled={ this.props.isFormSubmitted }>
						{ this.props.isFormSubmitted ? 
							<span>{this.props.buttonText} <i className="fa fa-spinner fa-spin"></i></span> : 
							<span><i className="fa fa-lock"></i> {this.props.buttonText}</span>
						}	
					</button>
				</div>
			</div>
		);
	}
});

export default CheckoutButton;