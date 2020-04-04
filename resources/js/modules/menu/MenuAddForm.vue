<template>
    <div class="add_form__wrapper">
      <!---Start--form--->
      <form v-on:submit.prevent="handleSubmit">

            <div class="form-group">
                <label for="name">Food items</label>
                <input v-model="food.item" type="text" placeholder="Enter food item"
                class="form-control">
            </div>
           

            <div class="form-group">
                <label for="name">Select Category</label>
                <multiselect 
                    v-model="food.category"
                    :options="categories">
                </multiselect>
            </div>

            <div class="form-group">
                <label for="name">Food items</label>
                <input v-model="food.price" type="number" placeholder="Enter price for food item"
                class="form-control">
            </div>


        <div class="form-group">
            <button class="btn btn-primary">Save</button>
        </div>
      </form>
     <!---End--form start--->
    </div>
</template>

<script>

    import Multiselect from 'vue-multiselect';
    export default {
        props:['categories'],
        components: {Multiselect},
        data(){
            return{
                food:{
                    item: '',
                    category: '',
                    price: 1000,
                }
            }
        },
        methods: {
            handleSubmit(){
                console.log('form data', this.food);
            }
        }
    }
</script>
