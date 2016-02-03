var React = require('react');
var csrfToken = $('meta[name="token"]').attr('content');

var NewTicketOption = React.createClass({

	getInitialState() {
		return {
			name: '',
			adultPrice: '',
			childPrice: ''
		}
	},

	onSubmit(e) {
		e.preventDefault();

		this.props.onSubmit(this.state.name, this.state.adultPrice, this.state.childPrice);

		this.resetText();

		$('#newTicketOption').modal('hide')
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

	resetText() {
		this.setState({
			name: '',
			adultPrice: '',
			childPrice: ''
		});
	},

	render() {
		return (
			<div className="modal fade" id="newTicketOption" role="dialog">
				<div className="modal-dialog" role="document">
					<div className="modal-content">
						<div className="modal-header">
							<button type="button" className="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 className="modal-title">New Ticket Option</h4>
						</div>
						<form method="POST" onSubmit={this.onSubmit}>
							<div className="modal-body">
								<input type="hidden" name="_token" value={csrfToken} />
								<div className="form-group">
									<label htmlFor="title">Name</label>
									<input id="title" className="form-control" placeholder="Bronze, Silver or Gold" 
										value={this.state.name} onChange={this.handleNameChange} />
								</div>

								<div className="row">
									<div className="col-md-6">
										<div className="form-group">
											<label htmlFor="adultPrice">Adult Price</label>
						            		<div className="input-group">
						    					<input id="adultPrice" className="form-control" value={this.state.adultPrice} onChange={this.handleAdultPriceChange} />
						            			<div className="input-group-addon">AED</div>
						            		</div>
										</div>
									</div>

									<div className="col-md-6">
										<div className="form-group">
											<label htmlFor="childPrice">Child Price</label>
						            		<div className="input-group">
						    					<input id="childPrice" className="form-control" value={this.state.childPrice} onChange={this.handleChildPriceChange} />
						            			<div className="input-group-addon">AED</div>
						            		</div>
										</div>
									</div>
								</div>
							</div>
							<div className="modal-footer">
								<button type="button" className="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" className="btn btn-primary" onClick={this.onSubmit}>Save Record</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		);
	}
});

export default NewTicketOption;