var React = require('react');
var ReactDOM = require('react-dom');

var stripeKey = $('meta[name="publishable-key"]').attr('content');
var csrfToken = $('meta[name="token"]').attr('content');
var siteUrl = $('meta[name="site_url"]').attr('content');

import ContactInformation from './ContactInformation';
import BillingInformation from './BillingInformation';
import CheckoutButton from './CheckoutButton';
import PaymentErrors from './PaymentErrors';
import BookedItems from './BookedItems';
import NeedHelp from './NeedHelp';

var BookingPaymentCheckout = React.createClass({

	getInitialState() {
		return {
			message: '',
			buttonText: 'Pay Now',
			isFormSubmitted: false,
			showErrorMessage: false
		}
	},

	stripeResponseHandler: function(status, response) {

		var $form = $('#billing-form');

		if (response.error)
		{
			this.setState({ message: response.error.message });
			this.setState({ showErrorMessage: true });

			this.resetFormState();
		} 
		else 
		{
			// token contains id, last4, and card type
			var token = response.id;
			$form.append($('<input type="hidden" name="token" />').val(token));
			$form.append($('<input type="hidden" name="cardName" />').val(response.card.name));
			$form.append($('<input type="hidden" name="cardBrand" />').val(response.card.brand));
			$form.append($('<input type="hidden" name="cardLastFour" />').val(response.card.last4));
			$form.append($('<input type="hidden" name="cardExpiryMonth" />').val(response.card.exp_month));
			$form.append($('<input type="hidden" name="cardExpiryYear" />').val(response.card.exp_year));
			$form.get(0).submit();
		}
    },

    onSubmit(e) {
    	e.preventDefault();

    	this.formIsSubmitting();
     
        Stripe.card.createToken($('#billing-form'), this.stripeResponseHandler);

        return false;
    },

	formIsSubmitting() {
		this.setState({ buttonText: 'Processing' });
		this.setState({ isFormSubmitted: true });
	},

	resetFormState() {
		this.setState({buttonText: 'Pay Now'});
		this.setState({isFormSubmitted: false});
	},

	componentWillMount() {
		Stripe.setPublishableKey(stripeKey);
	},

	componentDidMount() {
		console.log(window.bookingInformation)
	},

	render() {
		var postUrl = '/booking/' + window.bookingInformation.booking_reference + '/payment';

		return (	
			<div className="row">
				<div className="col s12 m8">
					<form method="POST" action={postUrl} id="billing-form" onSubmit={this.onSubmit}>
						<input type="hidden" name="_token" value={csrfToken} />
						<input type="hidden" name="_method" value="PUT" />
						<input type="hidden" name="user_id" value={window.bookingInformation.user.id} />
						<input type="hidden" name="booking_reference" value={window.bookingInformation.booking_reference} />
						<ContactInformation hasUserValue={true} user={window.bookingInformation.user} />
						<BillingInformation />
						{ this.state.showErrorMessage ? <PaymentErrors message={this.state.message }/> : '' }
						<CheckoutButton buttonText={this.state.buttonText} isFormSubmitted={ this.state.isFormSubmitted } />
					</form>
				</div>

				<div className="col s12 m4">
					<BookedItems bookedItems={window.bookingInformation} />
					<NeedHelp />
				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<BookingPaymentCheckout />,
	document.getElementById('BookingPaymentCheckout')
);