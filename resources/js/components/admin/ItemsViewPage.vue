<template>
    <div class ="container">
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
                            <router-link :to="{name: 'edit', params: { id: item.id }}" class="btn btn-success m-1">Edit</router-link>
                            <button class="btn btn-danger m-1" @click="deleteUser(item.id)">Delete</button>
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
            deleteUser(id) {
                axios
                    .delete(`http://localhost:8000/api/users/${id}`)
                    .then(response => {
                        let i = this.users.map(data => data.id).indexOf(id);
                        this.users.splice(i, 1)
                    });
            },
        }
    }
</script>