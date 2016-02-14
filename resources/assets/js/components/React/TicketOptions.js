var React = require('react');

var TicketOptions = React.createClass({
	componentDidMount() {
		console.log(this.props.currentPackage.tickets.information);
	},

	render() {

		var tickets = this.props.currentPackage.tickets.map(function(ticket) {
			var information = ticket.information.map(function(information) {
				return (
	                <li key={information.id} className="collection-item">
	                    <strong>{information.name}</strong> {information.description}
	                </li>
				);
			});

			return (
                <div className="col s12 m4" key={ticket.id}>
                    <div className="card z-depth-1">
                        <div className="card-image light-blue waves-effect">
                            <div className="card-title">{ticket.name}</div>
                            <div className="price">
                            	<sup>AED</sup>
                            	{ ticket.adultPrice}
                            	<sub>/adult</sub>
                            </div>
                             <p className="price-desc">1 day ticket</p>
                        </div>
                        <div className="card-content">
                            <ul className="collection">
                                <li className="collection-item">
                                    <strong>AED { ticket.childPrice}</strong> per child
                                </li>
                                {information}
                            </ul>
                        </div>
                    </div>
                </div>
			)
		});

		return (
            <div className="ticketOptions">
            	{tickets}
            </div>
		)
	}
});

export default TicketOptions;