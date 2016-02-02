var React = require('react');

var OverlayMenu = React.createClass({
	render() {
		return (
			<div className="overlay overlay-contentscale">
				<button type="button" className="overlay-close">Close</button>
				<nav>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/packages">Packages</a></li>
						<li><a href="/deals">Deals</a></li>
						<li><a href="/tourist-information">Tourist Info</a></li>
						<li><a href="/corporate">Corporate</a></li>
						<li><a href="/about">About Us</a></li>
						<li><a href="/contact">Contact Us</a></li>
						<li><a href="/cart"><i className="large material-icons">shopping_cart</i></a></li>
					</ul>
				</nav>
			</div>
		);
	}
});

export default OverlayMenu;