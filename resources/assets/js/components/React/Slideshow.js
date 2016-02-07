var React = require('react');
var ReactDOM = require('react-dom');

var Slideshow = React.createClass({

	render() {
		var logoPath = '/images/logo.png';
		var memorableExperiencePath = '/images/memorable-experience.png';
		var videoMp4Path = '/videos/video.mp4';
		var videoWebmPath = '/videos/video.webm';

		return (
			<div>
				<div className="slideshow">
					
					<div id="topLeftCorner"></div>
					
					<div className="logo">
						<a href="/">
							<img src={logoPath} alt="Eclipse Tourism" title="Eclipse Tourism" className="img-responsive" />
						</a>
					</div>
					
					<div id="bottomRightCorner"></div>	

					<video id="top_video" autoPlay loop preload muted poster="">
						<source src={videoMp4Path} type="video/mp4" />
						<source src={videoWebmPath} type="video/webm" />
					</video>
					
					<div id="intro-title">
						<div>
							<img src={memorableExperiencePath}
								alt="A Memorable Experience" title="A Memorable Experience" />
						</div>
						<p>
							<a href="/packages" className="btn waves-effect waves-light">View our Packages</a>
						</p>
					</div>
				</div>
				
				<p>&nbsp;</p>
			</div>
		);
	}
});

ReactDOM.render(
	<Slideshow />,
	document.getElementById('Slideshow')
);
