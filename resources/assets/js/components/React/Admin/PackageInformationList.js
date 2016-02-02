var React = require('react');

import AdditionalPackageInformation from './AdditionalPackageInformation';

var PackageInformationList = React.createClass({

	onDelete(id) {
		this.props.onDelete(id);
	},

	onEdit(id) {
		this.props.onEdit(id);
	},

	onUpdate(id, title, description) {
		this.props.onUpdate(id, title, description);
	},

	render() {
		var packageInformation = this.props.items.map(function(item) {
			return (
				<AdditionalPackageInformation key={item.id} 
					id={item.id}
					title={item.title} 
					description={item.description}
					onDelete={this.onDelete}
					onUpdate={this.onUpdate} />
			)	
		}.bind(this));

		return (	
			<div className="col-md-12">
				<ul className="list-group">
					{ packageInformation }
				</ul>
			</div>
		);
	}
});

export default PackageInformationList;