<template>
  <span @click="togoFavorite" class="icon is-small"><i :class="['fa fa-heart',isFavorite ? favoriteClass : unFavoriteClass ]"></i>&nbsp;{{ favoriteCount }}</span>
</template>

<script>
export default {
    props:['comment'],
    data(){
        return {
            'isFavorite':this.comment.is_favorite,
            'favoriteCount':this.comment.favorite_count,
            'favoriteClass':'favorite',
            'unFavoriteClass':'un-favorite'
        }
    },
    methods:{
       
        favorite(){
         
            axios.post('/api/v1/favorites',{
                'type':'comment',
                'type_id':this.comment.id
            }).then((data)=>{
                this.isFavorite = true
                this.favoriteCount++;
                console.log(data.data);
            }).catch((err)=>{
                console.log(err.response.data);

            });


        },
        unFavorite(){
            axios.post('/api/v1/favorites?_method=delete',{
                'type':'comment',
                'type_id':this.comment.id
            }).then((data)=>{
                this.isFavorite = false;
                this.favoriteCount--;
            }).catch((err)=>{
            });
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

