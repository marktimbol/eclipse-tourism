var React = require('react');

var AdditionalPackageInformation = React.createClass({

	getInitialState() {
		return {
			editing: false,
			title: this.props.title,
			description: this.props.description
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
		this.props.onUpdate(this.props.id, this.state.title, this.state.description);

		this.setState({
			editing: false
		});
	},

	handleTitleChange(e) {
		this.setState({ title: e.target.value });
	},

	handleDescriptionChange(e) {
		this.setState({ description: e.target.value });
	},

	render() {

		return (
			<li className="list-group-item">
				<div className="row">
					{ this.state.editing === true ?
						<div className="col-md-9">
							<div className="row">
								<div className="col-md-5">
									<input className="form-control" value={this.state.title} onChange={this.handleTitleChange} />
								</div>

								<div className="col-md-5">
									<input className="form-control" value={this.state.description} onChange={this.handleDescriptionChange} />
								</div>	

								<div className="col-md-1">
									<button className="btn btn-default btn-sm" onClick={this.onCancelEdit}>Cancel</button>
								</div>

							</div>
						</div> :
						<div className="col-md-9">
							<strong>{this.props.title}</strong> {this.props.description}
						</div>
					}

					<div className="col-md-3">
						<div className="actionButtons">
							<div className="btn-group">
								{ this.state.editing === true ?
									<button type="submit" onClick={this.onUpdate} className="btn btn-sm btn-primary"><i className="fa fa-save"></i></button> :
									<a onClick={this.onEdit} className="btn btn-sm btn-primary"><i className="fa fa-pencil"></i></a>
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

export default AdditionalPackageInformation;