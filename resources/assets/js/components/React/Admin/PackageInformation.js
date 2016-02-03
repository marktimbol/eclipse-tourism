var React = require('react');
var ReactDOM = require('react-dom');

import PackageInformationList from './PackageInformationList';
import NewPackageInformation from './NewPackageInformation';

var csrfToken = $('meta[name="token"]').attr('content');

var PackageInformation = React.createClass({

	getInitialState() {
		return {
			packageInformation: []
		}
	},

	componentDidMount() {
		this.fetchPackageInformation();
	},

	fetchPackageInformation() {
		var url = '/api/v1/packages/' + window.package_id + '/information';

		$.get(url, function(data) {
			this.setState({ packageInformation: data });
		}.bind(this));
	},	

	onSubmit(title, description) {

		var url = '/admin/packages/' + window.package_id + '/information';

		$.ajax({
			url: url,
			type: 'POST',
			data: {
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

	render() {
		return (
			<div className="row">
				<PackageInformationList items={this.state.packageInformation} onDelete={this.onDelete} onUpdate={this.onUpdate} />
				
				<NewPackageInformation onSubmit={this.onSubmit}/>
			</div>
		);
	}
});

ReactDOM.render(
	<PackageInformation />,
	document.getElementById('PackageInformation')
);