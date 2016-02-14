var React = require('react');
var csrfToken = $('meta[name="token"]').attr('content');
import TicketInfo from './TicketInfo';

var TicketInformation = React.createClass({

	getInitialState() {
		return {
			editing: false,
			ticketId: this.props.id,
			name: this.props.name,
			adultPrice: this.props.adultPrice,
			childPrice: this.props.childPrice,

			showForm: false,
			ticketName: '',
			ticketDescription: ''
		}
	},

	onDelete(e) {
		e.preventDefault();
		this.props.onDelete(this.props.id);
	},

	onEdit(e) {
		e.preventDefault();
		this.setState({ editing: true });
	},

	onCancelEdit() {
		this.setState({ editing: false });
	},

	onUpdate() {
		this.props.onUpdate(this.props.id, this.state.name, this.state.adultPrice, this.state.childPrice);

		this.setState({
			editing: false
		});
	},

	handleNameChange(e) {
		this.setState({ name: e.target.value });
	},

	handleAdultPriceChange(e) {
		this.setState({ adultPrice: e.target.value });
	},

	handleChildPriceChange(e) {
		this.setState({ childPrice: e.target.value });
	},

	showForm() {
		this.setState({ showForm: true });
	},

	hideForm() {
		this.setState({ showForm: false });
	},

	handleTicketNameChange(e) {
		this.setState({ ticketName: e.target.value });
	},

	handleTicketDescriptionChange(e) {
		this.setState({ ticketDescription: e.target.value });
	},

	onSubmitTicketInformation(e)
	{
		e.preventDefault();
		this.props.onSubmitTicketInformation(this.props.id, this.state.ticketName, this.state.ticketDescription);
		this.resetTicketInformationInput();
	},


	resetTicketInformationInput()
	{
		this.setState({
			ticketName: '',
			ticketDescription: ''
		});
	},

	render() {
		var ticketInformation = this.props.information.map(function(ticket) {
			return (
				<TicketInfo key={ticket.id} ticket={ticket} />
			)
		}.bind(this));
		return (
			<li className="list-group-item">
				<div className="row">
					{ this.state.editing  ?
						<div className="col-md-9">
							<div className="row">
								<div className="col-md-4">
									<input className="form-control" value={this.state.name} onChange={this.handleNameChange} />
								</div>

								<div className="col-md-3">
									<input className="form-control" value={this.state.adultPrice} onChange={this.handleAdultPriceChange} />
								</div>	

								<div className="col-md-3">
									<input className="form-control" value={this.state.childPrice} onChange={this.handleChildPriceChange} />
								</div>	

								<div className="col-md-1">
									<button className="btn btn-default btn-sm" onClick={this.onCancelEdit}>Cancel</button>
								</div>
							</div>
						</div>
						:
						<div className="col-md-9">
							<strong>{ this.state.name }</strong><br />
							Adult Price: { this.state.adultPrice} AED<br />
							Child Price: { this.state.childPrice } AED

							<h5>Includes:</h5>
							<div className="row">
								<ul className="ticket-includes">
									{ticketInformation}
								</ul>
								<div className="col-md-12">
									<br />
									<button type="button" className="btn btn-default btn-sm" onClick={this.showForm}>New Info</button>&nbsp;
									{ this.state.showForm ?
										<button type="button" className="btn btn-default btn-sm" onClick={this.hideForm}>Hide Form</button>
										: ''
									}
								</div>
							</div>

							{ this.state.showForm ? 
								<div>
									<hr />
									<form method="POST" className="form-inline" onSubmit={this.onSubmitTicketInformation}>
										<input type="hidden" name="_token" value={csrfToken} />
										<div className="col-md-5">
											<div className="form-group">
												<label>Name</label>
												<input className="form-control input-sm" placeholder="Name" 
													value={this.state.ticketName} 
													onChange={this.handleTicketNameChange} />
											</div>
										</div>
										<div className="col-md-5">
											<div className="form-group">
												<label>Description</label>
												<input className="form-control input-sm" placeholder="Description" 
													value={this.state.ticketDescription} 
													onChange={this.handleTicketDescriptionChange} />
											</div>
										</div>
										<div className="col-md-2">
											<div className="form-group">
												<label>&nbsp;</label>
												<button type="submit" className="btn btn-default btn-sm" 
													onClick={this.onSubmitTicketInformation}>Save Information</button>
											</div>
										</div>
									</form>
								</div>
								: 
								''
							}
						</div>
					}

					<div className="col-md-3">
						<div className="actionButtons">
							<div className="btn-group">
								{ this.state.editing === true ?
									<button type="submit" onClick={this.onUpdate} className="btn btn-sm btn-primary">Update</button> :
									<a onClick={this.onEdit} className="btn btn-sm btn-primary">Edit</a>
								}
								<button type="submit" className="delete btn btn-sm btn-danger" onClick={this.onDelete}>&times;</button>
							</div>
						</div>
					</div>
				</div>
			</li>	
		);
	}
});

export default TicketInformation;