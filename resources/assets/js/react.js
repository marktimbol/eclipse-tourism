var React = require('react');
var ReactDOM = require('react-dom');

import PackagePhotos from './components/React/PackagePhotos';
import BookPackageForm from './components/React/BookPackageForm';

var Package = React.createClass({

	getInitialState() {
		return {
			uploadsPath: 'http://eclipsetourism.dev/images/uploads/'
		}
	},

	showDescription() {
		return {
			__html: window.package.description
		}
	},

	componentDidMount() {	
	
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

					<h3 className="package__price">
						{ window.package.adult_price }
					</h3>

					<span className="package__price__notice"><em>Prices are subject to change without prior notice</em></span>

					<ul className="collection">
						<li className="collection-item">
							<strong>Departs:</strong> { window.package.departs }
						</li>
						<li className="collection-item">
							<strong>Returns:</strong> { window.package.returns }
						</li>								
						<li className="collection-item">
							<strong>Duration:</strong> { window.package.duration }
						</li>
						<li className="collection-item">
							<strong>Adult:</strong> { window.package.adult_price }
						</li>
						<li className="collection-item">
							<strong>Child:</strong> { window.package.child_price }
						</li>
						<li className="collection-item">
							Subject for Availability
						</li>			
					</ul>

					<BookPackageForm currentPackage={window.package} />

					<div className="share-package">
						<h6>Share this package</h6>
					</div>		

				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<Package />,
	document.getElementById('PackageInformation')
	);

