<template>
    <div>
        <h2 class="text-center">ALL Items</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in items" :key="item.id">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.price }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>
                        <div role="group">
                            <router-link :to="{name: 'edit', params: { id: item.id }}" class="bi bi-pencil-square"><img src="/img/admin/pen-fill.svg" title="Edit" /></router-link>
                            <img src="/img/admin/trash2-fill.svg" class="btn" @click="deleteItem(item.id)" title="Delete" />
                            <!-- <button class="btn btn-danger m-1" @click="deleteUser(item.id)">Delete</button> -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                items: []
            }
        },
        created() {
            axios
                .get('/admin/viewitems')
                .then(response => {
                    this.items = response.data;
                });
        },
        methods: {
            deleteItem(id) {
                let i = this.items.map(data => data.id).indexOf(id);
                        this.items.splice(i, 1)
            },
        }
    }
</script>