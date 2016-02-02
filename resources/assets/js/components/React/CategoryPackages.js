var React = require('react');

var CategoryPackages = React.createClass({

	render() {

		var packages = this.props.packages.map(function(currentPackage) {
			var packageUrl = '/package/' + currentPackage.slug;
			return (
				<li key={currentPackage.id}>
					<a href={packageUrl}>
						{currentPackage.name}
					</a>
				</li>	
			);
		});

		var visibility = {
			display: this.props.visibility
		};

		return (
			<ul style={visibility}>
				{ packages }
			</ul>
		);	
	}
});

export default CategoryPackages;