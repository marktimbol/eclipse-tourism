var React = require('react');
var ReactDOM = require('react-dom');

import PackagePhotos from './PackagePhotos';
import PackagePrice from './PackagePrice';
import BookPackageForm from './BookPackageForm';
import SharePackage from './SharePackage';

var PackageInformation = React.createClass({

	showDescription() {
		return {
			__html: window.package.description
		}
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
					<PackagePrice currentPackage={window.package} />
					<BookPackageForm currentPackage={window.package} />
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

