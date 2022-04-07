<template>
  
  <div class="jumbotron homebanner" style="background-image:url('img/store/store-banner.jpg')  ;">
    <!-- <h1>{{ child_msg }}</h1> -->
   <!--  <img src="img/store/store-banner.jpg" width="100%" > -->
  </div>
</template>

<script>
export default {
  data () {
    return {
      child_msg: 'Hello From the Child!'
    }
  }
}
</script>
<style type="text/css">
  .jumbotron.homebanner{
    height: 20vh;
  }
</style>