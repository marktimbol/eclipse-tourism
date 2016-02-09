var React = require('react');
var currentCurrency = $('meta[name="current_currency"]').attr('content');

var PackageInfo = React.createClass({

	render() {
		var additionalInformation = this.props.currentPackage.information.map(function(info) {
			return (
				<li key={info.id} className="collection-item">
					<strong>{info.title}</strong> {info.description}
				</li>
			);
		});

		return (
			<ul className="collection">
				<li className="collection-item">
					<strong>Adult: </strong>
					{
						this.props.isPromo ?
							<span>{ currentCurrency + ' ' + this.props.promo.adultPrice } &nbsp; &nbsp;
								<small className="oldPrice">{ currentCurrency + ' ' + this.props.adultPrice}</small>
							</span> :
						<span>{ currentCurrency + ' ' + this.props.adultPrice}</span>
					}
				</li>
				<li className="collection-item">
					<strong>Child: </strong>
					{
						this.props.isPromo ?
							<span>{ currentCurrency + ' ' + this.props.promo.childPrice } &nbsp; &nbsp;
								<small className="oldPrice">{ currentCurrency + ' ' + this.props.childPrice}</small>
							</span> :
						<span>{ currentCurrency + ' ' + this.props.childPrice}</span>
					}
				</li>
				{ this.props.currentPackage.minimum_quantity > 1 ? 
					<li className="collection-item">
						<strong>Minimum Adult Quantity:</strong>{ this.props.currentPackage.minimum_quantity }
					</li> : ''
				}
				{ this.props.currentPackage.confirm_availability ? 
					<li className="collection-item">
						Subject for Availability
					</li> : ''
				}
				{ additionalInformation }
			</ul>
		);
	}
});

export default PackageInfo;

