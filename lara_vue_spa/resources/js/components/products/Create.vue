<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h4>Create Product</h4></div>
                </div>
                <div class="card-body">
                    <form @submit.prevent="create">
                        <div class="row">
                            <!-- <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Id</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="product.id"
                                    />
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="product.name"
                                    />
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="product.color"
                                    />
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <label for="floatingTextarea2"
                                        >Designation</label
                                    >
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                        v-model="product.designation"
                                        style="height: 100px"
                                    ></textarea>
                                </div>
                            </div> -->
                        <Form v-bind:product="product"></Form>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "./Form";
export default {
    name: "create-blog",
    data() {
        return {
            product: {
                id: "",
                name: "",
                color: "",
                designation: "",
            },
        };
    },
    methods: {
        async create() {
            await axios
                .post("/api/product", this.product)
                .then((response) => {
                    this.$router.push({ name: "Show" });
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    components: {
        Form,
    },
};
</script>
