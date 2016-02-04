var React = require('react');
var numeral = require('numeral');

var currentCurrency = $('meta[name="current_currency"]').attr('content');

var CheckoutItem = React.createClass({
	render() {
		var itemUrl = '/package/' + this.props.item.options.selectedPackage.slug;
		var imagePath = '/images/uploads/' + this.props.item.options.selectedPackage.photos[0].path;

		var adultPrice = this.props.item.options.selectedPackage.adult_price;
		var childPrice = this.props.item.options.selectedPackage.child_price;

		if( this.props.item.options.selectedPackage.has_ticket_option == 1)
		{
			var ticketId = this.props.item.options.ticket;
			var tickets = this.props.item.options.selectedPackage.tickets;

			var selectedTicket = '';

			tickets.map(function(ticket) {
				if( ticketId == ticket.id ) {
					adultPrice = ticket.adultPrice;
					childPrice = ticket.childPrice;

					selectedTicket = ticket.name + ' Ticket';
				}
			});
		}

		return (
			<div className="order">
				<div className="order__image">
					<a href={itemUrl}>
						<img src={imagePath} width="70" alt={this.props.item.name} title={this.props.item.name} className="img-rounded" />
					</a>
				</div>

				<div className="order__body">
					<h5 className="order__title">{ this.props.item.name } </h5>
					<h6 className="order__price">{ currentCurrency + ' ' + numeral(adultPrice).format('0,0') }</h6>
					<p>
						<strong>{ selectedTicket }</strong><br />
						<strong>Adult: </strong>{ this.props.item.qty } pax<br />
						<strong>Child: </strong>  
						{ this.props.item.options.child_quantity } pax
							&nbsp;&times;&nbsp;
						{ currentCurrency + ' ' + numeral(childPrice).format('0,0') }
							&nbsp; = &nbsp;
						{ currentCurrency + ' ' + numeral(this.props.item.options.child_quantity * childPrice).format('0,0') }
					</p>
				</div>
			</div>
		);
	}
});

export default CheckoutItem;