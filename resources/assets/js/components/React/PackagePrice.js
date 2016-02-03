var React = require('react');

var currentCurrency = $('meta[name="current_currency"]').attr('content');

var PackagePrice = React.createClass({

	render() {
		var price = parseFloat(this.props.adultPrice).toFixed(2);

		var additionalInformation = this.props.currentPackage.information.map(function(info) {
			return (
				<li key={info.id} className="collection-item">
					<strong>{info.title}</strong> {info.description}
				</li>
			);
		});

		return (
			<div>
				<h3 className="package__price">
					{ currentCurrency +  price }
					<p className="package__price__notice"><em>Prices are subject to change without prior notice</em></p>	
				</h3>

				<ul className="collection">
				
					<li className="collection-item">
						<strong>Adult: </strong>AED { this.props.adultPrice }
					</li>

					<li className="collection-item">
						<strong>Child: </strong>AED { this.props.childPrice }
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
			</div>
		);
	}
});

export default PackagePrice;

