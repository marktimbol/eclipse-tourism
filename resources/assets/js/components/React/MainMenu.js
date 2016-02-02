var React = require('react');
var ReactDOM = require('react-dom');

import MegaMenu from './MegaMenu';

var MainMenu = React.createClass({
	render() {
		return (	
			<div className="navbar-fixed">
				<nav>
					<div className="nav-wrapper">
						<div className="menu top-menu right hide-on-small-and-down">
							<ul className="menu">
								<li><a href="/">Home</a></li>
								<li><a href="/packages">Packages</a>
									<MegaMenu />
								</li>							
								<li><a href="/deals">Deals</a></li>
								<li><a href="/tourist-information">Tourist Info</a></li>
								<li><a href="/corporate">Corporate</a></li>
								<li><a href="/about">About</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a href="/cart"><i className="large material-icons">shopping_cart</i></a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		);	
	}
});

ReactDOM.render(
	<MainMenu />,
	document.getElementById('MainMenu')
	);