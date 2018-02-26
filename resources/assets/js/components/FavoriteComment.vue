<template>
  <span @click="togoFavorite" class="icon is-small"><i :class="['fa fa-heart',isFavorite ? favoriteClass : unFavoriteClass ]"></i>&nbsp;{{ favoriteCount }}</span>
</template>

<script>
export default {
    props:['comment','bestAnswer'],
    data(){
        return {
            isFavorite:this.comment.is_favorite,
            favoriteCount:this.comment.favorite_count,
            favoriteClass:'favorite',
            unFavoriteClass:'un-favorite'
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
                this.emitChange()
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
                this.emitChange()
            }).catch((err)=>{
            });
        },
        togoFavorite(){
            this.isFavorite ? this.unFavorite() : this.favorite();
        },
        emitChange:function () {
            if (!this.bestAnswer){
                return
            }
            if (this.comment.id !== this.bestAnswer.id) return;
            let comment = this.comment
            comment.is_favorite = this.isFavorite
            comment.favorite_count = this.favoriteCount
            window.events.$emit('change-best-answer',comment);

        }
    },
    watch:{

        comment: {
            handler(curVal,oldVal){
                console.log(curVal,oldVal)
                this.isFavorite = this.comment.is_favorite;
                this.favoriteCount = this.comment.favorite_count;
            },
            deep:true

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

