var React = require('react');

var ContactInformation = React.createClass({
	render() {
		return (
			<div className="card-panel">
				<h5>Contact Information</h5>

				<div className="form-group">
					<label htmlFor="name">Name</label>
					<input type="text" id="name" 
						name="name"
						defaultValue={ this.props.hasUserValue ? this.props.user.name : '' }
						disabled={ this.props.hasUserValue }
						className="form-control" 
						placeholder="Full Name" 
						required />
				</div>

				<div className="row no-margin-bottom">
					<div className="col s12 m6">
						<div className="form-group">
							<label htmlFor="email">Email</label>
							<input type="email" id="email"
								name="email" 
								defaultValue={ this.props.hasUserValue ? this.props.user.email : '' }
								disabled={ this.props.hasUserValue }
								className="form-control" 
								placeholder="Email Address" 
								required />
						</div>	
					</div>

					<div className="col s12 m6">
						<div className="form-group">
							<label htmlFor="phone">Contact Number</label>
							<input type="text" id="phone" 
								name="phone"
								defaultValue={ this.props.hasUserValue ? this.props.user.phone : '' }
								disabled={ this.props.hasUserValue }
								className="form-control" 
								placeholder="Contact Number" 
								required />
						</div>
					</div>
				</div>

				<div className="row no-margin-bottom">
					<div className="col s12 m6">
						<div className="form-group">
							<label htmlFor="address1">Address Line 1</label>
							<input type="text" id="address1" 
								name="address1"
								defaultValue={ this.props.hasUserValue ? this.props.user.address1 : '' }
								disabled={ this.props.hasUserValue }
								className="form-control" 
								placeholder="Address Line 1" 
								required />
						</div>	
					</div>

					<div className="col s12 m6">
						<div className="form-group">
							<label htmlFor="address2">Address Line 2</label>
							<input type="text" id="address2"
								name="address2"
								defaultValue={ this.props.hasUserValue ? this.props.user.address2 : '' }
								disabled={ this.props.hasUserValue }
								className="form-control" 
								placeholder="Address Line 2" 
								required />
						</div>
					</div>
				</div>	

				<div className="row no-margin-bottom">
					<div className="col s12 m6">
						<div className="row">
							<div className="col s12 m6">
								<div className="form-group">
									<label htmlFor="city">City</label>
									<input type="text" id="city" 
										name="city"
										defaultValue={ this.props.hasUserValue ? this.props.user.city : '' }
										disabled={ this.props.hasUserValue }
										className="form-control" 
										placeholder="Your city" 
										required  />
								</div>	
							</div>

							<div className="col s12 m6">
								<div className="form-group">
									<label htmlFor="state">State</label>
									<input type="text" id="state" 
										name="state"
										defaultValue={ this.props.hasUserValue ? this.props.user.state : '' }
										disabled={ this.props.hasUserValue }
										className="form-control" 
										placeholder="State/Province/Region" 
										required  />
								</div>	
							</div>				
						</div>
					</div>

					<div className="col s12 m6">
						<div className="form-group">
							<label htmlFor="country">Country</label>
							<input type="text" id="country" 
								name="country"
								defaultValue={ this.props.hasUserValue ? this.props.user.country : '' }
								disabled={ this.props.hasUserValue }
								className="form-control" 
								placeholder="Your Country" 
								required  />
						</div>	
					</div>
				</div>

			</div>	
		);
	}
});

export default ContactInformation;