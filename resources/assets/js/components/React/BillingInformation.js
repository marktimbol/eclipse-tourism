var React = require('react');

var BillingInformation = React.createClass({
	
	render() {

		var minYear = new Date().getFullYear();
    	var maxYear = minYear + 10;
    	var yearsArray = [];

		for( var i = minYear; i <= maxYear; i++ ) {
			yearsArray.push(i);
		}

		var yearOptions = yearsArray.map(function(year) {
			return (
				<option key={year} value={year}>{year}</option>
			);
		});

		return (
			<div className="card-panel">
				<div className="row center-content">
					<div className="col s12 m8">
						<h5>Billing Information</h5>
					</div>

					<div className="col s12 m4">
						<img src='/images/credit-card-icons.png' alt="Secure Payment" title="Secure Payment" className="img-responsive" />
					</div>
				</div>

				<div className="row">
					<div className="col s12 m6">
						<div className="form-group">
							<label htmlFor="cc-number">Card Number</label>
							<input type="text" id="cc-number" 
								className="form-control" 
								data-stripe="number" 
								placeholder="Debit/Credit Card Number"
								required />
						</div>
					</div>

					<div className="col s12 m6">
						<div className="form-group">
							<label htmlFor="nameOnCard">Name on Card</label>
							<input type="text" id="nameOnCard" className="form-control" data-stripe="name" placeholder="Name on Card" required />
						</div>
					</div>

					<div className="col s12 m6">
						<div className="row">
							<div className="col s6 m6">
								<div className="form-group">
									<label htmlFor="expiryMonth">Expiry Date</label>
						            <select data-stripe="exp-month" id="expiryMonth" className="form-control" required>
						            	<option value="">Month</option>
						            	<option value="1">January</option>
						            	<option value="2">February</option>
						            	<option value="3">March</option>
						            	<option value="4">April</option>
						            	<option value="5">May</option>
						            	<option value="6">June</option>
						            	<option value="7">July</option>
						            	<option value="8">August</option>
						            	<option value="9">September</option>
						            	<option value="10">October</option>
						            	<option value="11">November</option>
						            	<option value="12">December</option>
						            </select>
						        </div>
							</div>

							<div className="col s6 m6">
								<div className="form-group">
									<label>&nbsp;</label>
						            <select data-stripe="exp-year" id="expiryYear" className="form-control" required>
						            	<option value="">Year</option>
						            	{yearOptions}
						            </select>
					            </div>
							</div>	
						</div>
					</div>		

					<div className="col s12 m6">
						<div className="row">
							<div className="col s6 m6">
							    <div className="form-group">
							    	<label htmlFor="cvc" className="full-width">Security code</label>
						      		<div className="input-container">
							      		<input id="cvc" type="text" data-stripe="cvc" className="form-control" required />
							      		<i className="fa fa-question-circle"></i>
						      		</div>
							    </div>
							</div>							
						</div>
					</div>
				</div>

			</div>	
		);
	}
});

export default BillingInformation;