var React = require('react');
var ReactDOM = require('react-dom');

var stripeKey = $('meta[name="publishable-key"]').attr('content');
var csrfToken = $('meta[name="token"]').attr('content');
var siteUrl = $('meta[name="site_url"]').attr('content');

import ContactInformation from './ContactInformation';
import BillingInformation from './BillingInformation';
import CheckoutButton from './CheckoutButton';
import PaymentErrors from './PaymentErrors';
import CheckoutItems from './CheckoutItems';
import NeedHelp from './NeedHelp';
import EmptyShoppingCart from './EmptyShoppingCart';

var Checkout = React.createClass({

	getInitialState() {
		return {
			cartItems: [],
			cartCount: 0,
			message: '',
			buttonText: 'Pay Now',
			isFormSubmitted: false,
			showErrorMessage: false
		}
	},

	fetchCartItems() {
		$.ajax({
			url: '/api/v1/cart',
			type: 'GET',
			cache: false,
			success: function(response) {
				this.setState({ cartCount: response.length });

				if( this.state.cartCount == 0 ) {
					swal({
						title: "Eclipse Tourism",
						text: "You don't have yet items on your cart.",
						type: "info", 
						confirmButtonText: 'Okay'
					});
				}

				this.setState({ cartItems: response });
			}.bind(this),
			error: function(xhr, status, err) {
				console.log(err)
			}.bind(this)
		});
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
			console.log(response);
			$form.append($('<input type="hidden" name="token" />').val(token));
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
		this.fetchCartItems();
	},

	render() {
		var postUrl = siteUrl + 'cart/checkout';

		return (
			<div className="row">
				<div className="col s12 m8">
					{
						this.state.cartCount !== 0 ?
							<form method="POST" action={postUrl} id="billing-form" onSubmit={this.onSubmit}>
								<input type="hidden" name="_token" value={csrfToken} />
								<ContactInformation />
								<BillingInformation />
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
	<Checkout />,
	document.getElementById('Checkout')
);