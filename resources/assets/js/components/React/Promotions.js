var React = require('react');
var ReactDOM = require('react-dom');

import Package from './Package';

var Promotions = React.createClass({

	getInitialState() {
		return {
			filterText: ''
		}
	},

	handleChange(e) {
		this.setState({ filterText: e.target.value });
	},

	componentDidMount() {
		console.log(window.packages);
	},

	render() {

		var packages = window.packages.map(function(currentPackage) {	
			var packageName = currentPackage.name.toLowerCase();
			var filterText = this.state.filterText.toLowerCase();

			if( packageName.indexOf(filterText) >= 0 ) {			
				return (
					<Package key={currentPackage.id} currentPackage={currentPackage} />
				);
			}
		}.bind(this));

		return (
			<div>
				<div className="col s12 m4 right">
					<input type="text" className="form-control"  placeholder="Search package" onChange={this.handleChange} />
				</div>

				<div className="clearfix"></div>
				<hr />
				{ packages }
			</div>
		);
	}
});

ReactDOM.render(
	<Promotions />,
	document.getElementById('Promotions')
);