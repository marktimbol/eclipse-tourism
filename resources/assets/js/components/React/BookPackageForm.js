var React = require('react');

var siteUrl = $('meta[name="site_url"]').attr('content');
var csrfToken = $('meta[name="token"]').attr('content');
var bookingUrl = siteUrl + 'booking';
var cartUrl = siteUrl + 'cart';
var currentDate = new Date();

var BookPackageForm = React.createClass({

	getInitialState() {
		return {
			bookedPackages: [],
			submitFormRoute: this.props.currentPackage.confirm_availability ? bookingUrl : cartUrl,
			buttonText: 'Book Now',
			isFormSubmitted: false,
			timings: [
				'8:30 AM', '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM', '11:00 AM', '11:30 AM', '12:00 PM', '12:30 PM',
				'01:00 PM', '01:30 PM', '02:00 PM', '02:30 PM', '03:00 PM', '03:30 PM', '04:00 PM', '04:30 PM', '05:00 PM',
				'05:30 PM', '06:00 PM', '06:30 PM', '07:00 PM', '07:30 PM', '08:00 PM', '08:30 PM', '09:00 PM', '09:30 PM',
				'10:00 PM', '10:30 PM', '11:00 PM', '11:30 PM'
			],
			date: '',
			date_submit: '',
			time: '',
			ticket: '',
			quantity: 1,
			child_quantity: 0
		}
	},

	fetchTicketPrice(e) {
		var ticketId = e.target.value;
		this.setState({ ticket: ticketId });

		var url = '/api/v1/packages/' + this.props.currentPackage.id + '/tickets/' + ticketId;

		$.get(url, function(response) {
			this.props.setPrices(response.adultPrice, response.childPrice);
		}.bind(this));
	},

	handleDateChange(e) {
		this.setState({ date: e.target.value });
	},

	handleTimeChange(e) {
		this.setState({ time: e.target.value });
	},

	handleAdultQuantityChange(e) {
		this.setState({ quantity: e.target.value });
	},

	handleChildQuantityChange(e) {
		this.setState({ child_quantity: e.target.value });
	},

	submitForm() {		
		this.formIsSubmitting();

		$.ajax({
			url: this.state.submitFormRoute,
			type: 'POST',
			data: {
				package_id: this.props.currentPackage.id,
				quantity: this.state.quantity,
				child_quantity: this.state.child_quantity,
				date: this.state.date,
				date_submit: this.state.date_submit,
				time: this.state.time,
				ticket: this.state.ticket
			},
			headers: { 'X-CSRF-Token': csrfToken },
			success: function(response) {
				var newBookedPackages = this.state.bookedPackages.concat(response);
				this.setState({ bookedPackages: newBookedPackages });

				var message = 'The Package has been successfully added to your cart.';

				swal({
					title: "Eclipse Tourism",  
					text: message,  
					type: "success", 
					timer: 3000,
					showConfirmButton: false
				});

				this.resetFormState();

			}.bind(this),

			error: function(xhr, status, err) {
				var message = "There was an error when booking a package " + err.toString();

				swal({
					title: "Eclipse Tourism",  
					text: message,
					type: "error", 
					timer: 3000,
					showConfirmButton: false
				});

				this.resetFormState();

			}.bind(this)
		});
	},

	beforeSubmitForm(e) {

		e.preventDefault();

		if( this.state.date == '' ) {
			swal({
				title: "Eclipse Tourism",  
				text: "Please select your preferred date.",  
				type: "error", 
				timer: 3000,
				showConfirmButton: false
			});	

			return this.resetFormState();
		}

		if( this.state.quantity < 1 ) {
			swal({
				title: "Eclipse Tourism",  
				text: "Adult quantity must be greater than zero.",  
				type: "error", 
				timer: 3000,
				showConfirmButton: false
			});	

			return this.resetFormState();
		}	

		if( this.state.quantity < this.props.currentPackage.minimum_quantity ) {
			swal({
				title: "Eclipse Tourism",  
				text: "You need to add a minimum of " + this.props.currentPackage.minimum_quantity + " on this package",  
				type: "error",
				showConfirmButton: true
			});	

			return this.resetFormState();
		}				

		return this.submitForm();

	},

	resetFormState() {
		this.setState({buttonText: 'Book Now'});
		this.setState({isFormSubmitted: false});
	},

	formIsSubmitting() {
		this.setState({ buttonText: 'Processing' });
		this.setState({ isFormSubmitted: true });
	},

	componentDidMount() {
		var inputDate = $('.datepicker').pickadate({
			formatSubmit: 'yyyy-mm-dd',
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 3, // Creates a dropdown of 15 years to control year
			min: currentDate,
			// `true` sets it to today. `false` removes any limits.
			max: false,
			clear: 'Clear',
			close: 'Close',
			onSet: function(context) {
				var picker = inputDate.pickadate('picker');
				this.setState({ date: picker.get() });
				this.setState({ date_submit: picker.get('select', 'yyyy-mm-dd') });
			}.bind(this)
		});

	},

	render() {
		var timings = this.state.timings.map( function(time) {
			return (
				<option key={time} value={time}>
					{time}
				</option>
				);
		});

		var ticketOptions = this.props.currentPackage.tickets.map(function(ticket) {
			return (
				<option key={ticket.id} value={ticket.id}>
					{ ticket.name }
				</option>
			);
		});

		var preferredTimingsStyle = {
			display: this.props.currentPackage.has_time_options ? 'block' : 'none'
		};

		var ticketOptionsStyle = {
			display: this.props.currentPackage.has_ticket_option ? 'block' : 'none'
		};

		var maximumAdultsQuantity = [];
		var maximumChildQuantity = [];

		for( var count = 1; count <= 30; count++ )
		{
			maximumAdultsQuantity.push(count);
		}

		for( var count = 0; count <= 30; count++ )
		{
			maximumChildQuantity.push(count);
		}

		var adultsCount = maximumAdultsQuantity.map(function(count) {
			return (
				<option key={count} value={count}>
					{count}
				</option>
				);
		});

		var childsCount = maximumChildQuantity.map(function(count) {
			return (
				<option key={count} value={count}>
					{count}
				</option>
				);
		});

		return (
			<div className="book-a-package-form">
				<h3 className="book-a-package-form__title">Book this package</h3>

				<form method="POST" onSubmit={this.beforeSubmitForm}>
					<div className="row">
						<div className="col m12 mb-0">
							<div className="form-group">
								<label htmlFor="date">Preferred Date:</label>
								<div className="input-group">
									<span className="input-group-addon"><i className="fa fa-calendar"></i></span>
									<input name="date" type="text" className="form-control datepicker" onChange={this.handleDateChange}/>
								</div>
							</div>
						</div>

						<div className="col m12 mb-0" style={preferredTimingsStyle}>
							<div className="form-group">
								<label htmlFor="time">Preferred Time:</label>
								<select defaultValue={this.state.time} className="form-control" onChange={this.handleTimeChange}>
									<option value="" disabled>Choose your option</option>
									{timings}
								</select>
							</div>
						</div>	

						<div className="col m12 mb-0" style={ticketOptionsStyle}>
							<div className="form-group">
								<label htmlFor="time">Ticket:</label>
								<select className="form-control" onChange={this.fetchTicketPrice}>
									<option value="1">Choose your ticket</option>
									{ ticketOptions }
								</select>
							</div>
						</div>	

						<div className="col m12 s12">
							<div className="row">
								<div className="col m6 s6 mb-0">
									<div className="form-group">
										<label htmlFor="adult">Adult</label>
										<select defaultValue={this.state.quantity} className="form-control" onChange={this.handleAdultQuantityChange}>
											{adultsCount}
										</select>
									</div>
								</div>

								<div className="col m6 s6 mb-0">
									<div className="form-group">
										<label htmlFor="child">Child</label>
										<select defaultValue={this.state.child_quantity} className="form-control" onChange={this.handleChildQuantityChange}>
											{childsCount}
										</select>
									</div>
								</div>
							</div>
						</div>

						<div className="col m12 s12">
							<div className="form-group">
								<button type="submit" className="btn btn-large waves-effect waves-light full-width" disabled={ this.state.isFormSubmitted } onClick={this.beforeSubmitForm}>
									{ this.state.buttonText }
									{ this.state.isFormSubmitted ? <i className="fa fa-spinner fa-spin"></i> : '' }
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		);
	}
});

export default BookPackageForm;