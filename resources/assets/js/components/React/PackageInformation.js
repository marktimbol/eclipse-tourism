var React = require('react');
var ReactDOM = require('react-dom');

import PackagePhotos from './PackagePhotos';
import PackagePrice from './PackagePrice';
import PackageInfo from './PackageInfo';
import TicketOptions from './TicketOptions';
import BookPackageForm from './BookPackageForm';
import SharePackage from './SharePackage';

var PackageInformation = React.createClass({

	getInitialState() {
		return {
			adultPrice: window.package.adult_price,
			childPrice: window.package.child_price,
			displayPrice: true,
		}
	},

	showDescription() {
		return {
			__html: window.package.description
		}
	},

	setPrices(ticketId, adultPrice, childPrice) {
		this.setState({
			adultPrice: adultPrice,
			childPrice: childPrice,
			displayPrice: true,
		});

		if( ticketId == 0 ) {
			this.setState({ displayPrice: false });
		}
	},

	componentDidMount() {
		if( window.package.has_ticket_option ) {
			this.setState({ displayPrice: false });
		}
	},

	render() {		
		var packageUrl = '/package/' + window.package.slug;
		return (
			<div>
				<div className="col m9 s12">
					<h1 className="package__title">{ window.package.name }</h1>
					<PackagePhotos photos={window.package.photos} />

					<div className="package__description">
						<h3>{ window.package.subtitle }</h3>
						<div dangerouslySetInnerHTML={this.showDescription()}></div>

						{ window.package.has_ticket_option ?
							<TicketOptions />
							: ''
						}

					</div>
				</div>

				<div className="col m3 s12">
					<PackagePrice 
						displayPrice={this.state.displayPrice} 
						adultPrice={this.state.adultPrice}
						currentPackage={window.package} />

					<PackageInfo 
						displayPrice={this.state.displayPrice}
						adultPrice={this.state.adultPrice}
						childPrice={this.state.childPrice}
						currentPackage={window.package} />

					<BookPackageForm 
						setPrices={this.setPrices}
						selectedTicket={this.state.selectedTicket}
						currentPackage={window.package} />

					<SharePackage url={packageUrl} />
				</div>
			</div>
		);
	}
});

ReactDOM.render(
	<PackageInformation />,
	document.getElementById('PackageInformation')
	);

