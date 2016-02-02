var React = require('react');

var SharePackage = React.createClass({
	render() {
		return (
			<div className="share-package">
				<h6>Share this package</h6>
				<a href="#" className="share-package__facebook"><i className="fa fa-facebook-official fa-3x"></i></a>
				<a href="#" className="share-package__twitter"><i className="fa fa-twitter fa-3x"></i></a>
				<a href="#" className="share-package__google"><i className="fa fa-google-plus fa-3x"></i></a>
			</div>
		);
	}
});

export default SharePackage;

