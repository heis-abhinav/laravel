<template>
    <div class="container store">
        <link rel="stylesheet" type="text/css" href="css/store.css">
        <side-component />
        <button class="btn btnsidenav" v-on:click="openNav" title="Open Sidebar">☰</button>
        <div >
                
                <router-view ></router-view>
            
        </div>
    </div>
</template>
<script type="text/javascript">
    import panelmethods from './sidepanel'
    
    export default {
            methods: {
                openNav : function ()
                {
                    panelmethods.openNav();  
                },
            },
            
        
    }

</script>