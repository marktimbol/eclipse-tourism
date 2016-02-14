var React = require('react');

var TicketOptions = React.createClass({
	render() {
		return (
            <div className="ticketOptions">
            	<div className="row">
	                <div className="col s12 m4">
	                    <div className="card z-depth-1">
	                        <div className="card-image light-blue waves-effect">
	                            <div className="card-title">BRONZE</div>
	                            <div className="price">
	                            	<sup>AED</sup>
	                            	{ this.props.currentPackage.tickets[0].adultPrice}
	                            	<sub>/adult</sub>
	                            </div>
	                             <p className="price-desc">1 day ticket</p>
	                        </div>
	                        <div className="card-content">
	                            <ul className="collection">
	                                <li className="collection-item">
	                                    <strong>AED { this.props.currentPackage.tickets[0].childPrice}</strong> per child
	                                </li>
	                                <li className="collection-item">
	                                    <strong>Unlimited</strong> access to the park
	                                </li>
	                                <li className="collection-item">
	                                    <strong>5 AED</strong> Merchandise Voucher
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>

	                <div className="col s12 m4">
	                    <div className="card z-depth-1">
	                        <div className="card-image light-blue waves-effect">
	                            <div className="card-title">SILVER</div>
	                            <div className="price">
	                            	<sup>AED</sup>
	                            	{ this.props.currentPackage.tickets[1].adultPrice}
	                            	<sub>/adult</sub>
	                            </div>
	                            <p className="price-desc">1 day ticket</p>
	                        </div>
	                        <div className="card-content">
	                            <ul className="collection">
	                                <li className="collection-item">
	                                    <strong>AED { this.props.currentPackage.tickets[1].childPrice}</strong> per child
	                                </li>
	                                <li className="collection-item">
	                                    <strong>Unlimited</strong> access to the park
	                                </li>
	                                <li className="collection-item">
	                                    <strong>10 AED</strong> Merchandise Voucher
	                                </li>
	                                <li className="collection-item">
	                                    <strong>3 Used</strong> Fast Pass
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>

	                <div className="col s12 m4">
	                    <div className="card z-depth-1">
	                        <div className="card-image light-blue waves-effect">
	                            <div className="card-title">GOLD</div>
	                            <div className="price">
	                            	<sup>AED</sup>
	                            	{ this.props.currentPackage.tickets[2].adultPrice}
	                            	<sub>/adult</sub>
	                            </div>
	                            <p className="price-desc">1 day ticket</p>
	                        </div>
	                        <div className="card-content">
	                            <ul className="collection">
	                                <li className="collection-item">
	                                    <strong>AED { this.props.currentPackage.tickets[2].childPrice}</strong> per child
	                                </li>
	                                <li className="collection-item">
	                                    <strong>Unlimited</strong> access to the park
	                                </li>
	                                <li className="collection-item">
	                                    <strong>15 AED</strong> Merchandise Voucher
	                                </li>
	                                <li className="collection-item">
	                                    <strong>Unlimited</strong> Fast Pass
	                                </li>
	                                <li className="collection-item">
	                                    <strong>Priority</strong> Seating
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
                </div>
            </div>
		)
	}
});

export default TicketOptions;