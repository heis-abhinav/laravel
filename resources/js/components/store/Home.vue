<template>
	<div class="row justify-content-center">
		<homebanner></homebanner>
		<hotpicks></hotpicks>
		<recentarrivals></recentarrivals>
	</div>
</template>





<script type="text/javascript">
	import homebanner from './children/homebanner.vue';
	import hotpicks from './children/hotpicks.vue';
	import recentarrivals from './children/recentarrivals.vue';
	export default {
		components: {homebanner, hotpicks, recentarrivals} 
	}
</script>