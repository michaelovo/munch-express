<template lang="pug">
    <div class="section">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, key) in items" :key="key">
                    <td v-text="item.name"></td>
                    <td v-text="item.price"></td>
                    <td v-text="item.description"></td>
                </tr>

            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        props:['items'],// this relies on 'items' props from menucontainer
        
    }
</script>