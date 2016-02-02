var React = require('react');

var MegaMenu = React.createClass({

	getInitialState() {
		return {
			categories: []
		};
	},

	fetchCategories() {
		var url = '/api/v1/categories';

		$.ajax({
			url: url,
			dataType: 'JSON',
			type: 'GET',
			cache: false,
			success: function(response) {
				if( this.isMounted() )
				{
					this.setState({ categories: response });
				}
			}.bind(this),
			error: function(xhr, status, err) {
				console.log(err.toString());
			}.bind(this)
		});
	},

	componentDidMount() {
		this.fetchCategories();
	},

	render() {

		var menus = this.state.categories.map(function(category) {

			var packages = category.packages.map(function(currentPackage) {
				var packageUrl = '/package/' + currentPackage.slug;

				return (
					<li key={currentPackage.id}>
						<a href={packageUrl}>
							{ currentPackage.name }
						</a>
					</li>
				);
			});

			return (
				<div key={category.id} className="column">
					<h6>{category.name}</h6>
					<ol>
						{packages}
					</ol>
				</div>
				)
		});

		return (	
			<div className="mega-menu">
				{menus}

				<div className="row">
					<div className="col s12 m12">
						<a href="/packages" className="btn waves-effect waves-light">View all packages</a>
					</div>
				</div>
			</div>
		);	
	}
});

export default MegaMenu;