<template>
	<div class="container-recentarrivals">
		<div class="card ra-title"><h3>{{message}}</h3></div>
			<div class="row recentarrivals flex-row flex-nowrap">
					<div class="card col-4" >
						<img src="/img/store/products/scientist.png" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
					<div class="card col-4"  >
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
					<div class="card col-4" >
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
					<div class="card col-4" >
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
					<div class="card col-4" >
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
					<div class="card col-4" >
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
			</div>




	</div>

</template>


<script>
	export default{
		data(){
			return{
				message: "Recent Arrivals"
			}
		}
		

	}
</script>

<style type="text/css">
	.card.ra-title{
		width: 50%;
		box-shadow: rgba(0, 0, 0, 1) 0px 19px 43px;
		border-top-left-radius: 37px 140px;
	  border-top-right-radius: 23px 130px;
	  border-bottom-left-radius: 110px 19px;
	  border-bottom-right-radius: 120px 24px;
	  text-align: center;
	}

	.row.recentarrivals{
		width: 90vw; 
		height: 20rem;
		overflow-y: hidden;
    	/*margin: 4px, 4px;*/
       /*padding: 4px;*/
       padding-top: 0px;
       padding: 0px;
       transform: rotate(-1deg);
       /*border: solid 3px #6e7491;*/
       /*clip-path: polygon(53% 10%, 100% 0, 100% 43%, 100% 100%, 68% 100%, 0 100%, 0 78%, 0 22%, 26% 12%);*/
    	/*border-radius: 20px;*/
    	border-top-left-radius: 37px 140px;
	  border-top-right-radius: 23px 130px;
	  border-bottom-left-radius: 110px 19px;
	  border-bottom-right-radius: 70px 24px;
	  /*box-shadow: rgba(0, 0, 0, 1) 0px 19px 43px;*/
	  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;}
</style>