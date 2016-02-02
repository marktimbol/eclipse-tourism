var React = require('react');
var ReactDOM = require('react-dom');
var InfiniteScroll = require('react-infinite-scroll')(React);

var InfiniteScrollTest = React.createClass({
	getInitialState() {
		return {
			hasMore: true,
			items: [this.createDiv(0)]
		}
	},

	createDiv(page) {
		return ( <div className = "samplePage" > {
			'Hello page ' + page + ' !'
			} </div>
		);
	},

	loadMore(page) {
		console.log('load');
		setTimeout(function () {
			this.setState({
				items: this.state.items.concat([this.createDiv(page)]),
				hasMore: (page < 15)
			});
		}.bind(this), 1000);
	},

	render() {
		console.log('render');
		return (
			<InfiniteScroll loader={<div className="loader">Loading ...</div>} loadMore={this.loadMore} hasMore={this.state.hasMore}>
			{ this.state.items }
			</InfiniteScroll > );
	}
});

ReactDOM.render(
	<InfiniteScrollTest />,
	document.getElementById('InfiniteScroll')
);