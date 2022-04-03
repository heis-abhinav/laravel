<template>

    <div class="container">
         
        <side-component />
        <div id="main">
            <button class="btn" v-on:click="openNav" title="Open Sidebar">☰</button>
            <router-view ></router-view>
        </div>
    </div>

</template>
<script type="text/javascript">
    import panelmethods from './adminpanel'
    export default {
            methods: {
                openNav : function ()
                {
                    panelmethods.openNav();
                     
                },
            }
        
    }

</script>

<style type="text/css">
    #main {
      transition: margin-left .5s;
      padding: 16px;
    }
</style>