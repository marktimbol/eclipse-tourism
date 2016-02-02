var React = require('react');
var currentCurrency = $('meta[name="current_currency"]').attr('content');

var BookedItem = React.createClass({
	render() {
		var itemUrl = '/package/' + this.props.item.slug;
		var imagePath = '/images/uploads/' + this.props.item.photos[0].path;

		return (
			<div className="order">
				<div className="order__image">
					<a href={itemUrl}>
						<img src={imagePath} width="70" alt={this.props.item.name} title={this.props.item.name} className="img-rounded" />
					</a>
				</div>

				<div className="order__body">
					<h5 className="order__title">{ this.props.item.name }</h5>
					<h6 className="order__price">{ currentCurrency + parseFloat(this.props.item.adult_price).toFixed(2) }</h6>
					<p>
						<strong>Adult: </strong>{ this.props.item.pivot.adult_quantity }<br />
						<strong>Child: </strong>  
						{ this.props.item.pivot.child_quantity }
							&nbsp;&times;&nbsp;
						{ currentCurrency + parseFloat(this.props.item.child_price).toFixed(2) }
					</p>
				</div>
			</div>
		);
	}
});

export default BookedItem;