var React = require('react');
var currentCurrency = $('meta[name="current_currency"]').attr('content');

var EditCartModal = React.createClass({

	getInitialState() {
		return {
			adultQuantity: this.props.item.qty,
			childQuantity: this.props.item.options.child_quantity
		}
	},

	handleAdultQuantityChange(e) {
		this.setState({ adultQuantity: e.target.value });
	},

	handleChildQuantityChange(e) {
		this.setState({ childQuantity: e.target.value });
	},

	submitForm(e) {
		e.preventDefault();

		if( this.state.adultQuantity < this.props.item.options.selectedPackage.minimum_quantity ) {
			swal({
				title: "Eclipse Tourism",  
				text: "You need to add a minimum of " + this.props.item.options.selectedPackage.minimum_quantity + " on this package",  
				type: "error",
				showConfirmButton: true
			});

			return;	
		}
		
		this.props.updateCartItem(this.props.item.rowid, this.state.adultQuantity, this.state.childQuantity);
		
	},

	onDelete(e) {
		e.preventDefault();

		this.props.deleteCartItem(this.props.item.rowid);
	},

	render() {	
		var modalId = 'item' + this.props.item.rowid;

		var displayBlock = {
			display: 'block'
		}

		return (
			<div id={modalId} className="modal">
				<div className="modal-content">
					<h4>{this.props.item.name}</h4>
					<form method="POST" onSubmit={this.submitForm}>
						<div className="row">
							<div className="col s6 m3">
								<div className="form-group">
									<label>Adult Quantity:</label>
									<div className="input-with-price">
										<input type="number" 
											className="form-control item-quantity" 
											value={this.state.adultQuantity} 
											size="5" max="100" 
											onChange={this.handleAdultQuantityChange} />
										<span>
											&times;
											{ currentCurrency + parseFloat(this.props.adultPrice).toFixed(2) }
										</span>
									</div>
								</div>
							</div>

							<div className="col s6 m3">
								<div className="form-group">
									<label>Child Quantity:</label>

									<div className="input-with-price">
										<input type="number" 
											className="form-control item-quantity" 
											value={this.state.childQuantity} 
											size="5" max="100"
											onChange={this.handleChildQuantityChange} />
										<span>
											&times;
											{ currentCurrency + parseFloat(this.props.childPrice).toFixed(2) }
										</span>
									</div>
								</div>	
							</div>

							<div className="col s6 m3">
								<div className="form-group">
									<div className="form-group">
										<label style={displayBlock}>&nbsp;</label>
										<button type="submit" className="btn waves-effect waves-light">
											Update Item
										</button>
									</div>	
								</div>	
							</div>										
						</div>
					</form>								
					
					<hr />

					<form method="POST" onSubmit={this.onDelete}>
						<input type="hidden" name="_method" value="DELETE" />
						<button type="submit" className="btn-flat center-content">
							<i className="material-icons">delete</i> Remove from Cart
						</button>
					</form>								
				</div>
			</div>
		);
	}
});

export default EditCartModal;