var React = require('react');
var ReactDOM = require('react-dom');

import Package from './Package';

var RelatedPackages = React.createClass({

	render() {

		var packages = window.relatedPackages.map(function(currentPackage) {	
			return (
				<Package key={currentPackage.id} currentPackage={currentPackage} />
			);	
		});

		return (
			<div className="row">
				<div className="col s12 m12">
					<h4 className="package__related__title">Related Packages</h4>
				</div>
				{ packages }
			</div>
		);
	}
});

ReactDOM.render(
	<RelatedPackages />,
	document.getElementById('RelatedPackages')
);