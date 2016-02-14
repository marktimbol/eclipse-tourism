var React = require('react');
var ReactDOM = require('react-dom');

import OverlayMenu from './OverlayMenu';
import FloatingButton from './FloatingButton';

var AppFooter = React.createClass({
	render() {
		return (
			<div>
				<FloatingButton />
				<footer>
					<div className="container">
						<div className="row">
							<div className="col m12">
								<div className="row">
									<div className="col m2 s6">
										<h5 className="footer__title">Useful Links</h5>
										<ul className="footer__links">
											<li><a href="/cart">Cart</a></li>
											<li><a href="/booking">Bookings</a></li>
											<li><a href="/faqs">FAQs</a></li>
											<li><a href="/privacy-policy">Privacy Policy</a></li>
											<li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>		
											<li><a href="/login">Employee Login</a></li>								
										</ul>
									</div>

									<div className="col m2 s6">
										<h5 className="footer__title">Follow Us</h5>
										<ul className="footer__links">
											<li><a href="https://www.facebook.com/eclipse.tourism" target="_blank">Facebook</a></li>									
											<li><a href="https://twitter.com/eclipsetourism" target="_blank">Twitter</a></li>
											<li><a href="https://www.instagram.com/eclipsetourism/" target="_blank">Instagram</a></li>
										</ul>
									</div>	

									<div className="col m3 s6">
										<h5 className="footer__title">Download our App</h5>
										<ul className="footer__links">
											<li><a href="#">iOS</a></li>
											<li><a href="#">Android</a></li>															
										</ul>
									</div>	

									<div className="col m2 offset-m3">
										<a href="http://expo2020dubai.ae/en/" target="_blank">
											<img src="/images/dubai-expo-2020.png" alt="Dubai Expo 2020" className="right" />
										</a>
									</div>																							
								</div>
							</div>		
						</div>
					</div>
				</footer>

				<OverlayMenu />

			</div>
		);
	}
});

ReactDOM.render(
	<AppFooter />,
	document.getElementById('Footer')
	);