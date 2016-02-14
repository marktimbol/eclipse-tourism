var React = require('react');

var TicketOptions = React.createClass({
	fetchTicketPrice(e) {
		var ticketId = e.target.value;
		var url = '/api/v1/packages/' + this.props.currentPackage.id + '/tickets/' + ticketId;
		$.get(url, function(response) {
			this.props.setPrices(ticketId, response.adultPrice, response.childPrice);
		}.bind(this));
	},

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
	                            	250
	                            	<sub>/adult</sub>
	                            </div>
	                             <p className="price-desc">1 day ticket</p>
	                        </div>
	                        <div className="card-content">
	                            <ul className="collection">
	                                <li className="collection-item">
	                                    <strong>AED 205</strong> per child
	                                </li>
	                                <li className="collection-item">
	                                    <strong>Unlimited</strong> access to the park
	                                </li>
	                                <li className="collection-item">
	                                    <strong>5 AED</strong> Merchandise Voucher
	                                </li>
	                            </ul>
	                        </div>
	                        <div className="card-action center-align">                      
	                            <button className="waves-effect waves-light light-blue btn" value="1" onClick={this.fetchTicketPrice}>Select Ticket</button>
	                        </div>
	                    </div>
	                </div>

	                <div className="col s12 m4">
	                    <div className="card z-depth-1">
	                        <div className="card-image light-blue waves-effect">
	                            <div className="card-title">SILVER</div>
	                            <div className="price">
	                            	<sup>AED</sup>
	                            	350
	                            	<sub>/adult</sub>
	                            </div>
	                            <p className="price-desc">1 day ticket</p>
	                        </div>
	                        <div className="card-content">
	                            <ul className="collection">
	                                <li className="collection-item">
	                                    <strong>AED 305</strong> per child
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
	                        <div className="card-action center-align">                      
	                            <button className="waves-effect waves-light light-blue btn" value="2" onClick={this.fetchTicketPrice}>Select Ticket</button>
	                        </div>
	                    </div>
	                </div>

	                <div className="col s12 m4">
	                    <div className="card z-depth-1">
	                        <div className="card-image light-blue waves-effect">
	                            <div className="card-title">GOLD</div>
	                            <div className="price">
	                            	<sup>AED</sup>
	                            	500
	                            	<sub>/adult</sub>
	                            </div>
	                            <p className="price-desc">1 day ticket</p>
	                        </div>
	                        <div className="card-content">
	                            <ul className="collection">
	                                <li className="collection-item">
	                                    <strong>AED 415</strong> per child
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
	                        <div className="card-action center-align">                      
	                            <button className="waves-effect waves-light light-blue btn" value="3" onClick={this.fetchTicketPrice}>Select Ticket</button>
	                        </div>
	                    </div>
	                </div>
                </div>
            </div>
		)
	}
});

export default TicketOptions;