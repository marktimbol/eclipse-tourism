var React = require('react');
var ReactDOM = require('react-dom');

import TicketOptionList from './TicketOptionList';
import NewTicketOption from './NewTicketOption';

var csrfToken = $('meta[name="token"]').attr('content');

var TicketOptions = React.createClass({

	getInitialState() {
		return {
			ticketOptions: window.currentPackage.tickets
		}
	},

	fetchTicketOptions() {
		var url = '/api/v1/packages/' + window.package_id + '/tickets';

		$.get(url, function(data) {
			this.setState({ ticketOptions: data });
		}.bind(this));
	},	

	onSubmit(name, adultPrice, childPrice) {
		var url = '/admin/packages/' + window.package_id + '/tickets';

		$.ajax({
			url: url,
			type: 'POST',
			data: {
				package_id: window.package_id,
				name: name,
				adultPrice: adultPrice,
				childPrice: childPrice
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchTicketOptions();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});

	},

	onUpdate(id, name, adultPrice, childPrice) {
	    var url = '/admin/packages/' + window.package_id + '/tickets/' + id;

		$.ajax({
			url: url,
			type: 'PUT',
			data: {
				id: id,
				package_id: window.package_id,
				name: name,
				adultPrice: adultPrice,
				childPrice: childPrice
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchTicketOptions();
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
				this.fetchTicketOptions();
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
				this.fetchTicketOptions();
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
				this.fetchTicketOptions();
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
				this.fetchTicketOptions();
				console.log(response, 'setState here');
			}.bind(this),
			error: function(xhr, status, err)
			{
				console.log(err.toString());
			}.bind(this)
		});
	},

	render() {
		return (
			<div className="row">
				<TicketOptionList 
					tickets={this.state.ticketOptions} 
					onDelete={this.onDelete} 
					onDeleteInformation={this.onDeleteInformation} 
					onUpdate={this.onUpdate} 
					onUpdateInformation={this.onUpdateInformation}
					onSubmitTicketInformation={this.onSubmitTicketInformation} />
					
				<NewTicketOption onSubmit={this.onSubmit}/>
			</div>
		);
	}
});

ReactDOM.render(
	<TicketOptions />,
	document.getElementById('TicketOptions')
);