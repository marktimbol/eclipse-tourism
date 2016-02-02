var React = require('react');

var FormatAmount = React.createClass({

	getInitialState() {
		return {
			formattedAmount: 0,
			currency: this.props.currency
		}
	},

	convertAmount() {		
		console.log('convertAmount()');

		var url = '/api/v1/convert-amount/' + this.props.amount + '/' + this.props.currency;
		console.log(url);

		$.ajax({
			url: url,
			type: 'GET',
			cache: false,
			success: function(response) {
				console.log(response);
				this.setState({ formattedAmount: response });
			}.bind(this),
			error: function(xhr, status, err) {
				console.log(err);
			}
		});
	},

	componentDidMount() {
		this.convertAmount();
		console.log('componentDidMount()' + this.state.formattedAmount);
	},

	// shouldComponentUpdate(prevProps, nextState) {
	// 	console.log(prevProps, nextState);
	// 	return prevProps.currency != nextState.currency;
	// },

	render() {
		if( this.state.formattedAmount == 0 )
		{
			return (
				<div className="right">
					<i className="fa fa-spinner fa-spin"></i>
				</div>
			)
		}
		return (
			<div>
				<h5 className="right">
					Total: { this.props.currency + ' ' +  this.state.formattedAmount }
				</h5>
			</div>	
		);
	}
});

export default FormatAmount;