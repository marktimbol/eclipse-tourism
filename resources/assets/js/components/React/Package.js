var React = require('react');

var Package = React.createClass({
	render() {
		var packageUrl = '/package/' + this.props.currentPackage.slug;
		var imagePath = '/images/uploads/' + this.props.currentPackage.photos[0].path;

		return (
			<div className="col m3 s12">
				<div className="card">
					<div className="card-image">
						<img src={imagePath} alt={this.props.currentPackage.name} title={this.props.currentPackage.name} className="img-responsive" />
					</div>

					<div className="card-action">
						<a href={packageUrl}>
							{this.props.currentPackage.name}
						</a>
					</div>
				</div>
			</div>
		);
	}
});

export default Package;