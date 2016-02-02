var React = require('react');

var PackagePhoto = React.createClass({
	render() {
		return (	
			<div>
				<img src={this.props.path} className="img-responsive" />
			</div>
		);	
	}
});

export default PackagePhoto;