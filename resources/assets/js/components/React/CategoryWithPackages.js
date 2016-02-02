var React = require('react');
var ReactDOM = require('react-dom');

import CategoryPackages from './CategoryPackages';

var CategoryWithPackages = React.createClass({

	getInitialState() {
		return {
			visible: false
		}
	},

	toggleVisibility() {
		this.setState({ visible: ! this.state.visible });
	},

	render() {

		return (
			<div>
				<h6 className="category__title" onClick={ this.toggleVisibility }>
					{ this.props.category.name }
				</h6>
				<CategoryPackages visibility={this.state.visible ? 'block' : 'none' } packages={this.props.category.packages} />
			</div>
		);	

		return (
			<div>{ categories }</div>
		);	
	}
});

export default CategoryWithPackages;