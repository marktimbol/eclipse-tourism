var React = require('react');
var ReactDOM = require('react-dom');

import PackagePhotos from './PackagePhotos';
import PackagePrice from './PackagePrice';
import PackageInfo from './PackageInfo';
import SharePackage from './SharePackage';

var PromoInformation = React.createClass({
	getInitialState() {
		return {
			adultPrice: window.promo.adultPrice,
			childPrice: window.promo.childPrice
		}
	},
	showDescription() {
		return {
			__html: window.promo.package.description
		}
	},
	render() {
		return (
			<div>
				<div className="col m9 s12">
					<h1 className="package__title">{ window.promo.package.name }</h1>
					<PackagePhotos photos={window.promo.package.photos} />

					<div className="package__description">
						<h3>{ window.promo.package.subtitle }</h3>
						<div dangerouslySetInnerHTML={this.showDescription()}></div>
					</div>
				</div>

				<div className="col m3 s12">
					<PackagePrice 
						currentPackage={window.promo.package} 
						adultPrice={window.promo.package.adult_price} 
						isPromo={true} 
						promoPrice={window.promo.adultPrice} />

					<PackageInfo 
						currentPackage={window.promo.package} 
						adultPrice={window.promo.package.adult_price} 
						childPrice={window.promo.package.child_price}
						isPromo={true} 
						promo={window.promo} />
				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<PromoInformation />,
	document.getElementById('PromoInformation')
	);

