<template>
<div class="container">
    <div class="row">
        <div class="col-12 mb-2">
            <router-link :to='{name: "Create"}' class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>ADD</router-link>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Designtion</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr v-for="product in products" :key="product.id">
                            <td>{{product.id}}</td>
                            <td>{{product.name}}</td>
                            <td>{{product.color}}</td>
                            <td>{{product.designation}}</td>
                            <td>
                                <router-link :to='{name: "Editor", params:{id: product.id}}' class="btn btn-info">EDIT</router-link>
                                <a type="button" @click="deleteProduct(product.id)" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
</template>
<script>
export default {
    name: 'products',
    data(){
        return {
            products: []
        }
    },
    mounted() {
        this.showProducts()
    },
    methods: {
        async showProducts() {
            await axios.get('/api/product')
            .then(response=>{
                this.products = response.data
            })
            .catch(error=>{
                this.products = []
            })
        },
        deleteProduct(id) {
            if(confirm('Are you sure you want to delete this product?')) {
                axios.delete(`/api/product/${id}`)
                .then(response=>{
                    console.log(response)
                    this.showProducts()
                })
                .catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>
