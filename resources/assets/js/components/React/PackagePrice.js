var React = require('react');
var numeral = require('numeral');
var currentCurrency = $('meta[name="current_currency"]').attr('content');

var PackagePrice = React.createClass({
	getDefaultProps() {
		return {
			isPromo: false
		}
	},
	render() {
		var price = numeral(this.props.adultPrice).format('0,0');
		var adultPromoPrice = 0;

		if( this.props.isPromo )
		{
			adultPromoPrice = numeral(this.props.promoPrice).format('0,0');
		}
		return (
			<h3 className="package__price">
				{
					this.props.currentPackage.confirm_availability == 1 ?
					'Upon Request' :
					<div>				
						{
							this.props.isPromo ? 
								<span>{ currentCurrency +  adultPromoPrice } <small className="oldPrice">{ price } AED</small></span> :
								<span>{ currentCurrency +  price }</span>
						}
						<p className="package__price__notice"><em>Prices are subject to change without prior notice</em></p>	
					</div>
				}
			</h3>
		);
	}
});

export default PackagePrice;

