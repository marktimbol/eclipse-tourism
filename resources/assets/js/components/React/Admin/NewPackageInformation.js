var React = require('react');
var ReactDOM = require('react-dom');

import PackageInformationList from './PackageInformationList';

var csrfToken = $('meta[name="token"]').attr('content');

var NewPackageInformation = React.createClass({

	getInitialState() {
		return {
			packageInformation: [],
			title: '',
			description: ''
		}
	},

	componentDidMount() {
		this.fetchPackageInformation();
	},

	fetchPackageInformation() {
		var url = '/admin/packages/' + window.package_id + '/information';

		$.get(url, function(data) {
			this.setState({ packageInformation: data });
		}.bind(this));
	},	

	onSubmit(e) {
		e.preventDefault();

		this.resetText();

		var url = '/admin/packages/' + window.package_id + '/information';

		$.ajax({
			url: url,
			type: 'POST',
			data: {
				package_id: window.package_id,
				title: this.state.title,
				description: this.state.description
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchPackageInformation();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});

	},

	onEdit(id) {

	},

	onUpdate(id, title, description) {
	    var url = '/admin/packages/' + window.package_id + '/information/' + id;

		$.ajax({
			url: url,
			type: 'PUT',
			data: {
				id: id,
				package_id: window.package_id,
				title: title,
				description: description
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchPackageInformation();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});
	},

	onDelete(id) {
	    var url = '/admin/packages/' + window.package_id + '/information/' + id;

		$.ajax({
			url: url,
			type: 'DELETE',
			data: {
				id: id,
				package_id: window.package_id
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				this.fetchPackageInformation();
			}.bind(this),
			error: function(xhr, status, err) {

			}.bind(this)
		});
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
			<div className="row">
				<PackageInformationList items={this.state.packageInformation} onDelete={this.onDelete} onUpdate={this.onUpdate}/>
				<div className="col-md-6">
					<h3>Add New Information</h3>
					<form method="POST" onSubmit={this.onSubmit}>
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

						<button type="submit" className="btn btn-primary">Save Record</button>
					</form>	
				</div>
				
			</div>
		);
	}
});

ReactDOM.render(
	<NewPackageInformation />,
	document.getElementById('NewPackageInformation')
);