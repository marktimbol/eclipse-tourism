var React = require('react');
var csrfToken = $('meta[name="token"]').attr('content');

var TicketInfo = React.createClass({
	getInitialState() {
		return {
			editing: false,
			name: this.props.ticket.name,
			description: this.props.ticket.description
		}
	},

	onEdit(e) {
		e.preventDefault();
		this.setState({ editing: true });
	},

	onCancelEdit() {
		this.setState({ editing: false });
	},

	onUpdate() {
		this.setState({
			editing: false
		});
	},
	
	onDelete(e) {
		e.preventDefault();
	},

	handleNameChange(e) {
		this.setState({ name: e.target.value });
	},

	handleDescriptionChange(e) {
		this.setState({ description: e.target.value });
	},

	render() {
		return (
			<li>
				<div className="col-md-9">
				{ this.state.editing ? 
					<div className="row">
						<div className="col-md-5">
							<input className="form-control input-sm" value={this.state.name} onChange={this.handleNameChange} />
						</div>

						<div className="col-md-5">
							<input className="form-control input-sm" value={this.state.description} onChange={this.handleDescriptionChange} />
						</div>	

						<div className="col-md-2">
							<button className="btn btn-default btn-sm" onClick={this.onCancelEdit}>Cancel</button>
						</div>
					</div>
					:
					<div>
						<strong>{this.props.ticket.name}</strong> {this.props.ticket.description}&nbsp;&nbsp;
					</div>
				}
				</div>

				<div className="col-md-3">
					<div className="actionButtons">
						<div className="btn-group">
							{ this.state.editing ?
								<button type="submit" onClick={this.onUpdate} className="btn btn-sm btn-primary">Update</button> :
								<a onClick={this.onEdit} className="btn btn-sm btn-primary">Edit</a>
							}
							<button type="submit" className="delete btn btn-sm btn-danger" onClick={this.onDelete}>&times;</button>
						</div>
					</div>	
				</div>
			</li>
		);
	}
});

export default TicketInfo;