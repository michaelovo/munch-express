<template>
    <div class="wrapper menu__container">
        <div class="row">
            
            <div class="col-md-8">
                <card-component>

                    <template slot="title">My menu items</template>
                    
                    <template slot="main">
                        <div class="section">
                            <multiselect 
                                v-model="menu" :options="categories" 
                                :searchable="false" 
                                :close-on-select="true" 
                                :show-labels="false" placeholder="Select Categories">
                            </multiselect>
                        </div>

                        <menu-group :items="currentMenuitems"></menu-group>
                        

                    </template>

                </card-component>
            </div>

            <div class="col-md-4">
                <card-component>

                    <template slot="title">
                        Add menu item
                    </template>
                    
                    <template slot="main">
                        <menu-add-form 
                            :categories="categories">
                        </menu-add-form>
                    </template>

                </card-component>
            </div>
               
        </div>
    </div>
</template>

<script>

    import _ from 'lodash';
    import Multiselect from 'vue-multiselect';
    import MenuGroup from "./MenuGroups.vue";
    import MenuAddForm from "./MenuAddForm.vue";

    export default {
       props:['items'],
       components:{
           Multiselect,MenuGroup,MenuAddForm},
        created(){
            _.forEach(this.items,(item, key) =>{
                this.categories.push(key);
            });//fetch the categories
            this.menu = this.categories[0];//Auto select first category
        },
        data(){
            return {
                menu: '',
                categories: [],
            }
        },
        computed:{
            currentMenuitems(){
                return this.items[this.menu]
                // return submenu items of selected menu/category
            }
        }
    }
</script>
