var React = require('react');
var ReactDOM = require('react-dom');

import PackagePhotos from './PackagePhotos';
import PackagePrice from './PackagePrice';
import PackageInfo from './PackageInfo';
import BookPackageForm from './BookPackageForm';
import SharePackage from './SharePackage';

var PackageInformation = React.createClass({

	getInitialState() {
		return {
			adultPrice: window.package.adult_price,
			childPrice: window.package.child_price
		}
	},

	showDescription() {
		return {
			__html: window.package.description
		}
	},

	setPrices(adultPrice, childPrice) {
		this.setState({
			adultPrice: adultPrice,
			childPrice: childPrice
		});
	},

	render() {

		return (
			<div>
				<div className="col m9 s12">
					<h1 className="package__title">{ window.package.name }</h1>
					<PackagePhotos photos={window.package.photos} />

					<div className="package__description">
						<h3>{ window.package.subtitle }</h3>
						<div dangerouslySetInnerHTML={this.showDescription()}></div>
					</div>
				</div>

				<div className="col m3 s12">
					<PackagePrice currentPackage={window.package} adultPrice={this.state.adultPrice} isPromo={false} />
					<PackageInfo currentPackage={window.package} adultPrice={this.state.adultPrice} childPrice={this.state.childPrice} isPromo={false}/>
					<BookPackageForm currentPackage={window.package} setPrices={this.setPrices} />
					<SharePackage currentPackage={window.package} />
				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<PackageInformation />,
	document.getElementById('PackageInformation')
	);

