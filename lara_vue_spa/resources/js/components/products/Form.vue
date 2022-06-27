<template>
        <div class="col-12 mb-2">
            <div class="form-group">
                <label>Id</label>
                <input type="text" class="form-control" v-model="product.id" />
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
                <label for="floatingTextarea2">Designation</label>
                <textarea
                    class="form-control"
                    id="floatingTextarea2"
                    v-model="product.designation"
                    style="height: 100px"
                ></textarea>
            </div>
        </div>

</template>
<script>
export default {
    name: "form",
    props: {
        product: Object
    },
    methods: {
    },
    computed: {
        changeData() {
            let data = {
                id: this.props.id,
                name: this.props.name,
                color: this.props.color,
                designation: this.props.designation,
            }
            this.$emit('abc', data)
        }
    }
};
</script>
