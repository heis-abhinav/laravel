<template>
	<div class="container-recentarrivals">
		<link rel="stylesheet" type="text/css" href="/css/components/recentarrivals.css">
		<div class="card ra-title"><h3>{{title}}</h3></div>
			<div class="row recentarrivals flex-row flex-nowrap">
					<div class="card col-4" v-for= "product in products" :key="product.id">
						<img class="card-img-top" :src="get_avatar(product.image)" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">{{product.name}}</h5>
					    <p class="card-text">{{product.description}}</p>
					    <a href="#" class="btn btn-primary">Button</a>
					  </div>
					</div>
			</div>




	</div>

</template>


<script>
	export default{
		data(){
			return{
				title: "Recent Arrivals",
				products : []
			}
		},
		created(){
			axios
				.get('/getrecentarrivals')
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