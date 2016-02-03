var React = require('react');

var SharePackage = React.createClass({
	render() {
		var url = '/package/' + this.props.currentPackage.slug;

		return (
			<div className="share-package">
				<h6>Share this package</h6>
				<ul>
					<li>
						<div className="fb-share-button" data-href={url} data-layout="icon"></div>
					</li>
					<li>
						<a href="#" className="share-package__twitter"><i className="fa fa-twitter fa-3x"></i></a>
					</li>

					<li>
						<a href="#" className="share-package__google"><i className="fa fa-google-plus fa-3x"></i></a>
					</li>
				</ul>	
			</div>
		);
	}
});

export default SharePackage;

