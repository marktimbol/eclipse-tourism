var React = require('react');

var NeedHelp = React.createClass({
	render() {
		return (
			<div className="currency card-panel">
				<h5>Need Help?</h5>
				<p>
					<a href="/contact">Call our customer services team</a> on the number below to speak to one of our advisors who will help you with all of your booking needs.
				</p>
				&nbsp;
				<p className="center-content"><i className="material-icons">phone</i> +971 4 453 4375</p>

			</div>	
		);
	}
});

export default NeedHelp;