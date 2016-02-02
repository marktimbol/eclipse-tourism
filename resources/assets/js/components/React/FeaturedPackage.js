var React = require('react');

import PackagePrice from './PackagePrice';
import SharePackage from './SharePackage';

var FeaturedPackage = React.createClass({

	showSVG() {
		var clipPathId = 'clipPath' + this.props.currentPackage.id;
		var imagePath = '/images/uploads/' + this.props.currentPackage.photos[0].path;

		return {
			__html: `<svg class='card__image' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 50 1920 500' preserveAspectRatio='xMidYMid slice'>
						<defs>
							<clipPath id=${clipPathId}>
								<circle class='clip' cx='960' cy='250' r='992'></circle>
							</clipPath>
						</defs>
						<image width='1920' height='650' clip-path='url(#clipPath${this.props.currentPackage.id})' xlink:href=${imagePath} />
					</svg>`
		}
	},

	showDescription() {
		return {
			__html: this.props.currentPackage.description
		}
	},

	render() {

		var packageUrl = '/package/' + this.props.currentPackage.slug;

		var svgStyle = {
			height: 'inherit'
		}

		return (
			<div className="col s12 m4">
				<div className="card">
					<div className="card__container card__container--closed">
						
						<div className="svg" dangerouslySetInnerHTML={this.showSVG()}></div>

						<div className="card__content">
							<i className="card__btn-close fa fa-times"></i>
							<div className="card__caption">
								<h2 className="card__title">{ this.props.currentPackage.name }</h2>
								<p className="card__subtitle">{ this.props.currentPackage.subtitle }</p>
							</div>

							<div className="card__copy">
								<div className="col m12 s12">
									<div className="package">
										<div className="row">
											<div className="col m9 s12">
												<p dangerouslySetInnerHTML={this.showDescription()}></p>
											</div>
											<div className="col m3 s12">
												<PackagePrice currentPackage={this.props.currentPackage} />
												<a href={packageUrl} className="btn btn-large btn-block waves-effect waves-light blue">View Package</a>
												<SharePackage currentPackage={this.props.currentPackage} />
											</div>
										</div>	
									</div>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>
		);
	}
});

export default FeaturedPackage;
