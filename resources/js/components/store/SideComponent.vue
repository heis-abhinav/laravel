<template>
        <div class="border-right" id="sidebar-wrapper">
            <link rel="stylesheet" type="text/css" href="../../css/store.css">
      <div class="sidebar-heading"><img class="btn" style="position: relative; left: 200px;" src="/img/admin/list.svg" v-on:click="openNav"> </div>
      
      <div class="list-group list-group-flush">
        <router-link :to="{name: 'home'}" class="list-group-item list-group-item-action bg-light">Home</router-link>
        <router-link :to="{name: 'add'}" class="list-group-item list-group-item-action bg-light">Add Item</router-link>
        <router-link :to="{name: 'items'}" class="list-group-item list-group-item-action bg-light">View Items</router-link>
        <router-link :to="{name: 'edit', params: { id: 1 }}" class="list-group-item list-group-item-action bg-light">Edit</router-link>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
</template>

<script>
    import panelmethods from '../../sidepanel'
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

</style>    
