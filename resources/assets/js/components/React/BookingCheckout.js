var React = require('react');
var ReactDOM = require('react-dom');

var csrfToken = $('meta[name="token"]').attr('content');
var siteUrl = $('meta[name="site_url"]').attr('content');

import ContactInformation from './ContactInformation';
import CheckoutButton from './CheckoutButton';
import PaymentErrors from './PaymentErrors';
import CheckoutItems from './CheckoutItems';
import NeedHelp from './NeedHelp';
import EmptyShoppingCart from './EmptyShoppingCart';

var BookingCheckout = React.createClass({

	getInitialState() {
		return {
			cartItems: [],
			cartCount: 0,
			message: '',
			buttonText: 'Book Now',
			isFormSubmitted: false,
			showErrorMessage: false,
		}
	},

	formIsSubmitting() {
		this.setState({ buttonText: 'Processing' });
		this.setState({ isFormSubmitted: true });
	},

	resetFormState() {
		this.setState({buttonText: 'Book Now'});
		this.setState({isFormSubmitted: false});
	},

	fetchCartItems() {
		$.get('/api/v1/booking', function(response) {
			this.setState({
				cartItems: response,
				cartCount: response.length
			});
		}.bind(this));
	},

	submitFormAjax() {

		this.formIsSubmitting();

		var postUrl = siteUrl + 'booking/checkout';

        $.ajax({
        	url: postUrl,
        	type: 'POST',
        	data: $('#booking-form').serialize(),
        	headers: { 'X-CSRF-Token': csrfToken },
        	success: function(response) {

				swal({
					title: "Eclipse Tourism",  
					text: "You have successfully booked the Package(s). Please check your email.",
					type: "success", 
					timer: 3000,
					showConfirmButton: false
				});

				this.fetchCartItems();
				this.resetFormState();

        	}.bind(this),
        	error: function(xhr, status, err) {
				swal({
					title: "Eclipse Tourism",  
					text: err.toString(),
					type: "error", 
					timer: 3000,
					showConfirmButton: false
				});			

				this.resetFormState();	
        	}.bind(this)
        });
	},

    onSubmit(e) {
    	e.preventDefault();
    	this.submitFormAjax();
    },

	componentDidMount() {
		this.fetchCartItems();
	},

	render() {
		return (
			<div className="row">
				<div className="col s12 m8">
					{
						this.state.cartCount !== 0 ?
							<form method="POST" id="booking-form" onSubmit={this.onSubmit}>
								<input type="hidden" name="_token" value={csrfToken} />
								<ContactInformation hasUserValue={false} />
								{ this.state.showErrorMessage ? <PaymentErrors message={this.state.message }/> : '' }
								<CheckoutButton buttonText={this.state.buttonText} isFormSubmitted={ this.state.isFormSubmitted }/>
							</form>
							:
							<EmptyShoppingCart />
					}

				</div>

				<div className="col s12 m4">
					<CheckoutItems cartItems={this.state.cartItems} />
					<NeedHelp />
				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<BookingCheckout />,
	document.getElementById('BookingCheckout')
);