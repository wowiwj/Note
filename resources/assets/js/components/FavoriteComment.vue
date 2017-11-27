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
            axios.post('/api/v1/favorites',{
                'type':'comment',
                'comment_id':123
            }).then((data)=>{
                console


            }).catch((err)=>{


            });


        },
        unFavorite(){


        },
        togoFavorite(){
            this.favorite ? this.unFavorite() : this.favorite();
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

