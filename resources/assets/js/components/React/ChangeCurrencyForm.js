var React = require('react');

var ChangeCurrencyForm = React.createClass({

	getInitialState() {
		return {
			currencies: ['AED', 'USD', 'GBP', 'JPY']
		}
	},

	componentDidMount() {
		$('select').material_select();
	},

	handleChange(e) {
		e.preventDefault();
		this.props.handleChangeCurrency(e.target.value);
	},

	render() {

		var availableCurrencies = this.state.currencies.map(function(currency, index) {
			return (
				<option key={index} value={currency}>{currency}</option>
			)
		});

		return (
			<div>
				<h5>Select Currency</h5>

				<form action="/change-currency" className="form-inline">
					<div className="input-field">
						<select className="browser-default" onChange={this.handleChange}>
							{ availableCurrencies }
						</select>
					</div>
				</form>
			</div>
		);
	}
});

export default ChangeCurrencyForm;