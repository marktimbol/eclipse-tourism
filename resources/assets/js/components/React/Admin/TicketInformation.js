var React = require('react');

var TicketInformation = React.createClass({

	getInitialState() {
		return {
			editing: false,
			name: this.props.name,
			adultPrice: this.props.adultPrice,
			childPrice: this.props.childPrice
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


	render() {
		return (
			<li className="list-group-item">
				<div className="row">
					{ this.state.editing === true ?
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
						</div> :
						<div className="col-md-9">
							<strong>{ this.state.name }</strong><br />
							Adult Price: { this.state.adultPrice} AED<br />
							Child Price: { this.state.childPrice } AED
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