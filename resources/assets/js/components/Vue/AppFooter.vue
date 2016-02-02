
<template>

	<div>
		<div class="fixed-action-btn" v-if="showCartButton">
			<a href="/cart" class="btn-floating btn-large blue">
				<i class="large material-icons">shopping_cart</i>
			</a>
		</div>


		<div class="fixed-action-btn" v-if="!showCartButton">
			<a href="/packages" class="btn-floating btn-large blue">
				<i class="fa fa-plus"></i>
			</a>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col m12">
					<div class="row">
						<div class="col m2 s6">
							<h5 class="footer__title">Useful Links</h5>
							<ul class="footer__links">
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Terms &amp; Conditions</a></li>										
							</ul>
						</div>

						<div class="col m2 s6">
							<h5 class="footer__title">Follow Us</h5>
							<ul class="footer__links">
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Facebook</a></li>									
							</ul>
						</div>	

						<div class="col m3 s6">
							<h5 class="footer__title">Download our App</h5>
							<ul class="footer__links">
								<li><a href="#">iOS</a></li>
								<li><a href="#">Android</a></li>															
							</ul>
						</div>	

						<div class="col m2 offset-m3">
							<a href="http://expo2020dubai.ae/en/" target="_blank">
								<img v-bind="{src: '/images/dubai-expo-2020.png'}" alt="Dubai Expo 2020" class="right" />
							</a>
						</div>																							
					</div>
				</div>		
			</div>
		</div>
	</footer>

	<overlay-menu></overlay-menu>

</template>

<script>

	import OverlayMenu from './OverlayMenu.vue';

	export default {

		data() {
			return {
				cartCount: 0
			}
		},

		components: {
			OverlayMenu
		},

		ready() {
			console.log(this.cartCount);
		},

		methods: {
	    	fetchCartCount() {
				this.$http.get('/api/v1/cart/count').then(function (response) {
					console.log('fetchCartCount() = ' + response.data);
					this.$set('cartCount', response.data)
				});
	    	},
		},

		computed: {
			showCartButton() {
				return this.cartCount > 0 ? true : false;
			}
		}
	}

</script>