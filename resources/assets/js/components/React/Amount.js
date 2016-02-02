var React = require('react');

var Amount = React.createClass({

	render() {

		if( ! this.props.loaded )
		{
			return (
				<div className="right">
					<i className="fa fa-spinner fa-spin"></i>
				</div>
			)
		}
		return (
			<span>
				{ this.props.currency + ' ' +  this.props.amount }
			</span>
		);
	}
});

export default Amount;