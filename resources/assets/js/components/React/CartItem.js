var React = require('react');
var currentCurrency = $('meta[name="current_currency"]').attr('content');

import EditCartModal from './EditCartModal';

var CartItem = React.createClass({

	updateCartItem(rowId, adultQuantity, childQuantity) {
		this.props.updateCartItem(rowId, adultQuantity, childQuantity);
	},

	deleteCartItem(rowId) {
		this.props.deleteCartItem(rowId);
	},

	openModal() {
		$('#item'+this.props.item.rowid).openModal();
	},

	render() {

		$('.materialboxed').materialbox();
		
		var imagePath = '/images/uploads/' + this.props.item.options.selectedPackage.photos[0].path;
		var packageUrl = '/package/' + this.props.item.options.selectedPackage.slug;

		var adultPrice = this.props.item.options.selectedPackage.adult_price;
		var childPrice = this.props.item.options.selectedPackage.child_price;

		if( this.props.item.options.selectedPackage.has_ticket_option == 1)
		{
			var ticketId = this.props.item.options.ticket;
			var tickets = this.props.item.options.selectedPackage.tickets;

			tickets.map(function(ticket) {
				if( ticketId == ticket.id ) {
					adultPrice = ticket.adultPrice;
					childPrice = ticket.childPrice;
				}
			});
		}

		return (
			<tr>
				<td width="550">
					<div className="row">
						<div className="col m3">
							<img src={imagePath} className="materialboxed img-rounded" width="100" alt={this.props.item.name} title={this.props.item.name} />
						</div>

						<div className="col m8">
							<div className="cart__package">
								<h4 className="cart__package__title">
									<a href={packageUrl}>
										{this.props.item.name}
									</a>
								</h4>

								<p className="text-muted">
									<i className="fa fa-calendar"></i>&nbsp;&nbsp; 
									{ this.props.item.options.date }
									{ this.props.item.options.time ? this.props.item.options.time : '' }
								</p>

								{ this.props.item.options.selectedPackage.confirm_availability ? 
									<p className="text-muted">* Subject for Availability</p> : 
									'' 
								}

		 						{ this.props.item.options.child_quantity > 0 ?
		 							<ul className="collection">
		 								<li className="collection-item">
		 									<strong>Child: </strong>
		 									{ this.props.item.options.child_quantity }
			 									&nbsp; &times; &nbsp;
		 									{ currentCurrency + parseFloat(childPrice).toFixed(2) }
		 								</li>
		 							</ul> : ''
		 						}
							</div>
						</div>
					</div>
				</td>

				<td className="nowrap">

					{ currentCurrency + parseFloat(adultPrice).toFixed(2) }
					
				</td>

				<td className="nowrap">{ this.props.item.qty }</td>
				
				<td className="nowrap">{ currentCurrency + parseFloat(this.props.item.subtotal).toFixed(2) }</td>

				<td>
					<a className="modal-trigger" onClick={this.openModal}>
						<i className="fa fa-pencil"></i> Edit
					</a>

					<EditCartModal key={this.props.item.rowid} item={this.props.item} updateCartItem={this.updateCartItem} deleteCartItem={this.deleteCartItem} />
				</td>
			</tr>
		);
	}
});

export default CartItem;