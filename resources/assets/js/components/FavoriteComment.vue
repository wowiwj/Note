<template>
  <span @click="togoFavorite" class="icon is-small"><i :class="['fa fa-heart',isFavorite ? favoriteClass : unFavoriteClass ]"></i>&nbsp;{{ favoriteCount }}</span>
</template>

<script>
export default {
    data(){
        return {
            'isFavorite':false,
            'favoriteCount':23223,
            'favoriteClass':'favorite',
            'unFavoriteClass':'un-favorite'
        }
    },
    methods:{
       
        favorite(){
            alert(1);
            axios.post('/api/v1/favorites',{
                'type':'comment',
                'type_id':1333
            }).then((data)=>{
                console.log(data.data);
            }).catch((err)=>{
                console.log(err.response.data);

            });


        },
        unFavorite(){

            alert(2);

        },
        togoFavorite(){
            this.isFavorite ? this.unFavorite() : this.favorite();
        }
    }
  
}
</script>

<style scoped>
.favorite{
    color: red;
}
.un-favorite{
    color: #999;
}

</style>

