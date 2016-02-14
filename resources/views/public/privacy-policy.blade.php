@extends('public.layouts.public')

@section('pageTitle', 'Privacy Policy')

@section('body_class', 'page has-parallax')

@section('content')

    <div class="parallax-container">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="white-transparent">
                            <h1 class="parallax__title">Privacy Policy</h1>
                        </div>
                    </div>
                </div>
            </div>
            {!! getParallaxPhoto('dubai.jpg', 'Privacy Policy') !!}
        </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col m12">
				<div class="page__description">
					<div class="row">
						<div class="col s12 m12">
							<h3>Our Commitment To Privacy</h3>
							<p>Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested.</p>

							<h3>The Information We Collect</h3>
							<p>
								This notice applies to all information collected or submitted on this website. On some pages, you can order products, make requests, and register to receive materials. The types of personal information collected at these pages are:

								<address>
									Name <br />
									Address <br /> 
									Email address <br />
									Phone number <br />
								</address>

								On some pages, you can submit information about other people. For example, if you order a gift online and want it sent directly to the recipient, you will need to submit the recipient's address. In this circumstance, the types of personal information collected are:

								<address>
									Name <br />
									Address <br /> 
									Phone number <br />
								</address>
							</p>

							<h3>The Information We Don't Collect</h3>
							<p>Credit/Debit Card Information</p>

							<h3>The Way We Use Information</h3>
							<p>
								We use the information you provide about yourself when placing an order only to complete that order. We do not share this information with outside parties except to the extent necessary to complete that order.
							</p>
							<p>
								We use the information you provide about someone else when placing an order only to ship the product and to confirm delivery. We do not share this information with outside parties except to the extent necessary to complete that order.
							</p>
							<p>
								We offer gift-cards by which you can personalize a product you order for another person. Information you provide to us to create a gift-card is only used for that purpose, and it is only disclosed to the person receiving the gift.
							</p>
							<p>
								We use return email addresses to answer the email we receive. Such addresses are not used for any other purpose and are not shared with outside parties.
							</p>
							<p>
								You can register with our website if you would like to receive our catalog as well as updates on our new products and services. Information you submit on our website will not be used for this purpose unless you fill out the registration form.
							</p>
							<p>
								We use non-identifying and aggregate information to better design our website and to share with advertisers. For example, we may tell an advertiser that X number of individuals visited a certain area on our website, or that Y number of men and Z number of women filled out our registration form, but we would not disclose anything that could be used to identify those individuals.
							</p>
							<p>
								Finally, we never use or share the personally identifiable information provided to us online in ways unrelated to the ones described above without also providing you an opportunity to opt-out or otherwise prohibit such unrelated uses.
							</p>

							<h3>Our Commitment To Data Security</h3>
							<p>
								To prevent unauthorized access, maintain data accuracy, and ensure the correct use of information, we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect online.
							</p>

							<h3>Our Commitment To Children's Privacy</h3>
							<p>
								Protecting the privacy of the very young is especially important. For that reason, we never collect or maintain information at our website from those we actually know are under 13, and no part of our website is structured to attract anyone under 13.
							</p>

							<h3>How You Can Access Or Correct Your Information</h3>
							<p>
								You can access all your personally identifiable information that we collect online and maintain by contacting us. We use this procedure to better safeguard your information.
							</p>
							<p>
								You can correct factual errors in your personally identifiable information by sending us a request that credibly shows error.
							</p>
							<p>
								To protect your privacy and security, we will also take reasonable steps to verify your identity before granting access or making corrections.
							</p>

							<h3>How To Contact Us</h3>
							<p>
								Should you have other questions or concerns about these privacy policies, <a href="{{ route('contact') }}">please contact us</a>.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  

@endsection