var React = require('react');

import PackagePhoto from './PackagePhoto';

var PackagePhotos = React.createClass({

	// componentDidMount() {
	// 	$('.owl-carousel').owlCarousel({
	// 		autoPlay: true,
	// 		slideSpeed : 300,
	// 		paginationSpeed : 400,
	// 		singleItem:true
	// 	});
	// },

	render() {
		var state = this.state;
		var uploadspath = '/images/uploads/';

		var photos = this.props.photos.map( function(photo) {
			return (
				<PackagePhoto key={photo.id} path={uploadspath + photo.path} />
			);
		});

		return (
			<div className="owl-carousel">
				{photos}
			</div>
		);
	}
});

export default PackagePhotos;



