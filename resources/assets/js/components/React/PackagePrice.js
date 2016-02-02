var React = require('react');

var currentCurrency = $('meta[name="current_currency"]').attr('content');

var PackagePrice = React.createClass({

	render() {
		var price = parseFloat(this.props.currentPackage.adult_price).toFixed(2);

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
				</h3>

				<p className="package__price__notice"><em>Prices are subject to change without prior notice</em></p>

				<ul className="collection">
				
					<li className="collection-item">
						{ this.props.currentPackage.adult_price !== '0' ?
							<p><strong>Adult: </strong>AED { this.props.currentPackage.adult_price }</p> :
							<p><strong>Adult: </strong> Upon Request</p>
						}
					</li>

					<li className="collection-item">
						<strong>Child: </strong>AED { this.props.currentPackage.child_price }
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

