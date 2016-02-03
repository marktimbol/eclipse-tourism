var React = require('react');
var ReactDOM = require('react-dom');

import TicketOptionList from './TicketOptionList';
import NewTicketOption from './NewTicketOption';

var csrfToken = $('meta[name="token"]').attr('content');

var TicketOptions = React.createClass({

	getInitialState() {
		return {
			ticketOptions: []
		}
	},

	componentDidMount() {
		this.fetchTicketOptions();
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

	render() {
		return (
			<div className="row">
				<TicketOptionList tickets={this.state.ticketOptions} onDelete={this.onDelete} onUpdate={this.onUpdate} />

				<NewTicketOption onSubmit={this.onSubmit}/>
			</div>
		);
	}
});

ReactDOM.render(
	<TicketOptions />,
	document.getElementById('TicketOptions')
);