var React = require('react');
var ReactDOM = require('react-dom');

import PackagePhotos from './PackagePhotos';
import PackagePrice from './PackagePrice';
import PackageInfo from './PackageInfo';
import SharePackage from './SharePackage';

var PromoInformation = React.createClass({
	showDescription() {
		return {
			__html: window.promo.description
		}
	},
	render() {
		var promoUrl = '/deals/' + window.promo.slug; 
		return (
			<div>
				<div className="col m9 s12">
					<h1 className="package__title">{ window.promo.name }</h1>
					<PackagePhotos photos={window.promo.photos} />

					<div className="package__description">
						<h3>Promo Details</h3>
						<div dangerouslySetInnerHTML={this.showDescription()}></div>
					</div>
				</div>

				<div className="col m3 s12">
					<SharePackage url={promoUrl} />
				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<PromoInformation />,
	document.getElementById('PromoInformation')
	);

