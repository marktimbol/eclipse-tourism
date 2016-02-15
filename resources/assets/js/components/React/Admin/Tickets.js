var React = require('react');
var ReactDOM = require('react-dom');

import Ticket from './Ticket';
import NewTicket from './NewTicket';

var csrfToken = $('meta[name="token"]').attr('content');

var Tickets = React.createClass({

	getInitialState() {
		return {
			tickets: window.currentPackage.tickets
		}
	},

	fetchTickets() {
		var url = '/api/v1/packages/' + window.package_id + '/tickets';

		$.get(url, function(data) {
			this.setState({ tickets: data });
		}.bind(this));
	},	

	onSubmit(name, duration, adultPrice, childPrice) {
		var url = '/admin/packages/' + window.package_id + '/tickets';

		$.ajax({
			url: url,
			type: 'POST',
			data: {
				package_id: window.package_id,
				name: name,
				duration: duration,
				adultPrice: adultPrice,
				childPrice: childPrice
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchTickets();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});

	},

	onUpdate(id, name, duration, adultPrice, childPrice) {
	    var url = '/admin/packages/' + window.package_id + '/tickets/' + id;

		$.ajax({
			url: url,
			type: 'PUT',
			data: {
				id: id,
				package_id: window.package_id,
				name: name,
				duration: duration,
				adultPrice: adultPrice,
				childPrice: childPrice
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchTickets();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});
	},

	onUpdateInformation(id, ticketId, name, description) {
	    var url = '/admin/tickets/' + ticketId + '/information/' + id;

		$.ajax({
			url: url,
			type: 'PUT',
			data: {
				id: id,
				ticket_id: ticketId,
				name: name,
				description: description
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchTickets();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});
	},

	onDelete(id) {
	    var url = '/admin/packages/' + window.package_id + '/tickets/' + id;

		$.ajax({
			url: url,
			type: 'DELETE',
			data: {
				id: id,
				package_id: window.package_id
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchTickets();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});
	},

	onDeleteInformation(id, ticketId) {
	    var url = '/admin/tickets/' + ticketId + '/information/' + id;

		$.ajax({
			url: url,
			type: 'DELETE',
			data: {
				id: id,
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchTickets();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});
	},

	onSubmitTicketInformation(ticketId, name, description)
	{
		var url = '/admin/tickets/' + ticketId + '/information';

		$.ajax({
			url: url,
			type: 'POST',
			data: {
				ticketId: ticketId,
				name: name,
				description: description
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response)
			{
				this.fetchTickets();
				console.log(response, 'setState here');
			}.bind(this),
			error: function(xhr, status, err)
			{
				console.log(err.toString());
			}.bind(this)
		});
	},

	render() {
		var tickets = this.state.tickets.map(function(item) {
			return (
				<Ticket key={item.id} 
					ticket={item}
					onUpdate={this.onUpdate}
					onUpdateInformation={this.onUpdateInformation}
					onDelete={this.onDelete}
					onDeleteInformation={this.onDeleteInformation}
					information={item.information}
					onSubmitTicketInformation={this.onSubmitTicketInformation} />
			)	
		}.bind(this));

		return (
			<div className="row">
				<div className="col-md-12">
					<h3>Ticket Options</h3>
					<ul className="list-group">
						{ tickets }
					</ul>
					<button type="button" className="btn btn-primary btn-sm" data-toggle="modal" data-target="#newTicket">Add New Ticket</button>
				</div>

				<NewTicket onSubmit={this.onSubmit}/>
			</div>
		);
	}
});

ReactDOM.render(
	<Tickets />,
	document.getElementById('Tickets')
);