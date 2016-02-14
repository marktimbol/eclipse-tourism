var React = require('react');

import TicketInformation from './TicketInformation';

var TicketOptionList = React.createClass({

	onDelete(id) {
		this.props.onDelete(id);
	},

	onDeleteInformation(id, ticketId) {
		this.props.onDeleteInformation(id, ticketId);
	},

	onEdit(id) {
		this.props.onEdit(id);
	},

	onUpdate(id, name, adultPrice, childPrice) {
		this.props.onUpdate(id, name, adultPrice, childPrice);
	},

	onUpdateInformation(id, ticketId, name, description) {
		this.props.onUpdateInformation(id, ticketId, name, description);
	},

	onSubmitTicketInformation(ticketId, name, description) {
		this.props.onSubmitTicketInformation(ticketId, name, description);
	},

	render() {
		var ticketOptions = this.props.tickets.map(function(item) {
			return (
				<TicketInformation key={item.id} 
					id={item.id}
					name={item.name} 
					adultPrice={item.adultPrice}
					childPrice={item.childPrice}
					onUpdate={this.onUpdate}
					onUpdateInformation={this.onUpdateInformation}
					onDelete={this.onDelete}
					onDeleteInformation={this.onDeleteInformation}
					information={item.information}
					onSubmitTicketInformation={this.onSubmitTicketInformation} />
			)	
		}.bind(this));

		return (	
			<div className="col-md-12">
				<h3>Ticket Options</h3>
				<ul className="list-group">
					{ ticketOptions }
				</ul>
				<button type="button" className="btn btn-primary btn-sm" data-toggle="modal" data-target="#newTicketOption">Add New Ticket Option</button>
			</div>
		);
	}
});

export default TicketOptionList;