<template>
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editor Product</h4></div>
            </div>
            <div class="card-body">
                <form @submit.prevent="editor">
                    <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Id</label>
                                    <input type="text" class="form-control" v-model="product.id">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" v-model="product.name">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" v-model="product.color">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <label for="floatingTextarea2">Designation</label>
                                    <textarea class="form-control" id="floatingTextarea2" v-model="product.designation" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editor-blog",
    data(){
        return {
            product:{
                id:"",
                name:"",
                color: "",
                designation: ""
            }
        }
    },
    mounted() {
        this.showProduct()
    },
    methods:{
        async showProduct(){
             await axios.get(`/api/product/${this.$route.params.id}`).then(response=>{
                const { id, name, color, designation } = response.data
                this.product.id = id
                this.product.name = name
                this.product.color = color
                this.product.designation = designation

            }).catch(error=>{
                console.log(error)
            })
        },
        async editor(){
            await axios.put(`/api/product/${this.$route.params.id}`,this.product).then(response=>{
                this.$router.push({name:"Show"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}

</script>
