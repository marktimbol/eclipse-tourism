var React = require('react');

var FloatingButton = React.createClass({

	componentDidMount() {
	 //    Pusher.log = function(message) {
	 //      if (window.console && window.console.log) {
	 //        window.console.log(message);
	 //      }
	 //    };
    
		// var pusher = new Pusher('d9d13dc1741694d6be57');
		// var channel = pusher.subscribe('new-item-in-cart');

		// channel.bind('App\\Events\\ItemWasAddedOnTheCart', function(data) {
		// 	console.log(data);
		// 	alert('hi');
		// });
	},

	render() {

		var divStyle = {
			display: 'none'
		}

		return (
			<div>
				<div className="fixed-action-btn" style={divStyle}>
					<a href="/cart" className="btn-floating btn-large blue">
						<i className="large material-icons">shopping_cart</i>
					</a>
				</div>

				<div className="fixed-action-btn">
					<a href="/packages" className="btn-floating btn-large blue">
						<i className="fa fa-plus"></i>
					</a>
				</div>

			</div>
		);
	}
});

export default FloatingButton;