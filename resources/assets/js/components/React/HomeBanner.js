var React = require('react');
var ReactDOM = require('react-dom');

var HomeBanner = React.createClass({
	render() {
		return (
			<div className="row">
				<div className="col s12 m12">
					<div className="white-background">
						<div className="row center-content">
							<div className="col s12 m8">
								<img src="/images/home-slide1.jpg" className="img-responsive" alt="See latest offers" title="See latest offers" />
							</div>

							<div className="col s12 m4">
								<div className="home__message">
									<h3 className="home__message__title">Lorem ipsum dolor sit amet.</h3>

									<p className="home__message__description">
										Ipsum has been the industrys standard dummy text ever since the 1500s.
									</p>

									<a href="/packages" className="btn waves-effect waves-light blue">See the latest offers</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<HomeBanner />,
	document.getElementById('HomeBanner')
	);