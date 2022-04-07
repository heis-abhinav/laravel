<template>
		<!-- -->
		<div class="container-hotpicks">
		<link rel="stylesheet" type="text/css" href="/css/components/hotpicks.css">
		<!-- <div class="row hp-parent justify-content-center"> -->
			<div class="card hp-title"><h3>{{title}}</h3></div>
			
			<div class="row hotpicks flex-row flex-nowrap">
				<!-- <div class="jumbotron hotpicks mt-4 my-4" >  -->
				<!-- <div class="row"> -->
					<div class="card col-4" v-for= "product in products" :key="product.id">
						<img class="card-img-top" :src="get_avatar(product.image)" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">{{product.name}}</h5>
					    <p class="card-text">{{product.description}}</p>
					    <a href="#" class="btn btn-primary">Button</a>
					  </div>
					</div>
					
				<!-- </div> -->
			</div>
		<!-- </div> -->
		</div>
</template>
<script>
	export default{
		data(){
			return{
				title: 'Hot Picks',
				products : []
			}
		},
		created(){
			axios
				.get('/gethotpicks')
				.then(response=> {
					this.products = response.data
				});
		},
		methods: {
			get_avatar(image){
               let photo = (image > 100) ? image : "/img/store/products/"+ image;
               return photo;
            },
		}
	}
</script>
<style type="text/css">

</style>