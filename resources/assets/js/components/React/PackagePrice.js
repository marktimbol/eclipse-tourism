var React = require('react');
var numeral = require('numeral');

var currentCurrency = $('meta[name="current_currency"]').attr('content');

var PackagePrice = React.createClass({

	render() {
		var price = numeral(this.props.adultPrice).format('0,0');

		return (
			<h3 className="package__price">
				{
					this.props.currentPackage.confirm_availability == 1 ?
					'Upon Request' :
					<div>				
						{ currentCurrency +  price }
						<p className="package__price__notice"><em>Prices are subject to change without prior notice</em></p>	
					</div>
				}
			</h3>
		);
	}
});

export default PackagePrice;

