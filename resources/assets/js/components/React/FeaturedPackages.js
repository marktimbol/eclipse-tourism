var React = require('react');
var ReactDOM = require('react-dom');

import FeaturedPackage from './FeaturedPackage';

var FeaturedPackages = React.createClass({

	componentDidMount() {
		console.log(window.packages);
	},
	
	render() {

		var featuredPackages = window.packages.map(function(currentPackage) {
			return (
				<FeaturedPackage key={currentPackage.id} currentPackage={currentPackage} />
				);
		});

		return (
			<div className="row featured_package">
				<div className="col s12 m12">
					<div className="col s12 m12">
						<h3 className="featured__package__title">Featured Packages</h3>
					</div>
					
					<div className="pattern pattern--hidden"></div>
					{ featuredPackages }
				</div>

				<div className="text-center">
					<p>&nbsp;</p>
					<p>
						<a href="/packages" className="btn waves-effect waves-light">View all Packages</a>
					</p>
				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<FeaturedPackages />,
	document.getElementById('FeaturedPackages')
	);
