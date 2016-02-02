var React = require('react');
var ReactDOM = require('react-dom');

import CategoryWithPackages from './CategoryWithPackages';

var CategoriesFilter = React.createClass({

	render() {
		var categories = window.categories.map(function(category) {
			return (
				<li key={category.id}>
					<CategoryWithPackages category={category} packages={category.packages} />
				</li>
			);	
		}.bind(this));

		return (
			<div>
				<h5 className="filter-package__title">Categories</h5>
				<ul>
					{categories}
				</ul>
			</div>
			);	
	}
});

ReactDOM.render(
	<CategoriesFilter />,
	document.getElementById('CategoriesFilter')
	);