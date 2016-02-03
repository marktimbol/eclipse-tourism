var React = require('react');
var csrfToken = $('meta[name="token"]').attr('content');

var NewPackageInformation = React.createClass({

	getInitialState() {
		return {
			title: '',
			description: ''
		}
	},

	onSubmit(e) {
		e.preventDefault();

		this.props.onSubmit(this.state.title, this.state.description);

		this.resetText();

		$('#newPackageInformation').modal('hide')
	},


	handleTitleChange(e) {
		this.setState({ title: e.target.value });
	},

	handleDescriptionChange(e) {
		this.setState({ description: e.target.value });
	},

	resetText() {
		this.setState({
			title: '',
			description: ''
		});
	},

	render() {
		return (
			<div className="modal fade" id="newPackageInformation" role="dialog">
				<div className="modal-dialog" role="document">
					<div className="modal-content">
						<div className="modal-header">
							<button type="button" className="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 className="modal-title">New Package Information</h4>
						</div>
						<form method="POST" onSubmit={this.onSubmit}>
							<div className="modal-body">
								<input type="hidden" name="_token" value={csrfToken} />
								<div className="form-group">
									<label htmlFor="title">Title</label>
									<input type="text" className="form-control" placeholder="Departs daily at" 
										value={this.state.title} onChange={this.handleTitleChange} />
								</div>

								<div className="form-group">
									<label htmlFor="title">Description</label>
									<input type="text" className="form-control" placeholder="08:30 - 10:00am" 
										value={this.state.description} onChange={this.handleDescriptionChange} />
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

export default NewPackageInformation;