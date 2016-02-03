var React = require('react');

var SharePackage = React.createClass({
	render() {
		var url = '/package/' + this.props.currentPackage.slug;

		return (
			<div className="share-package">
				<h6>Share this package</h6>
				<hr />
				<ul>
					<li>
						<div className="fb-share-button" data-href={url} data-layout="button_count"></div>
					</li>
					<li>
						<a href="https://twitter.com/share" className="twitter-share-button" data-via="">Tweet</a>
					</li>
				</ul>	
			</div>
		);
	}
});

export default SharePackage;

