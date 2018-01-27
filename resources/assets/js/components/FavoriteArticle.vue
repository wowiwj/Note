<template>

    <div class="favorite-article">
        <i @click="toggleFavorite" v-if="isFavorited" class="fa fa-heart" aria-hidden="true"></i>
        <i @click="toggleFavorite" v-else="isFavorited"  class="fa fa-heart-o" aria-hidden="true"></i>
        <span class="favorite-count">{{ favorites_count }}</span>

        <div class="favorite-users">
            <div class="favorite-user">
                <img src="http://wx.qlogo.cn/mmopen/s9lI61bpfShs1eVDgnqEiaq5bRpEXMayfHacSoFghmhp5wH9x6ibCCA5nM6wdDeurofc6VJribBPu4r0gPI2ick0aniadIHiapeY5E/0" alt="sdsd">
            </div>

            <div class="favorite-user">
                <img src="http://wx.qlogo.cn/mmopen/s9lI61bpfShs1eVDgnqEiaq5bRpEXMayfHacSoFghmhp5wH9x6ibCCA5nM6wdDeurofc6VJribBPu4r0gPI2ick0aniadIHiapeY5E/0" alt="sdsd">
            </div>

            <div class="favorite-user">
                <img src="http://wx.qlogo.cn/mmopen/s9lI61bpfShs1eVDgnqEiaq5bRpEXMayfHacSoFghmhp5wH9x6ibCCA5nM6wdDeurofc6VJribBPu4r0gPI2ick0aniadIHiapeY5E/0" alt="sdsd">
            </div>

            <div class="favorite-user">
                <img src="http://wx.qlogo.cn/mmopen/s9lI61bpfShs1eVDgnqEiaq5bRpEXMayfHacSoFghmhp5wH9x6ibCCA5nM6wdDeurofc6VJribBPu4r0gPI2ick0aniadIHiapeY5E/0" alt="sdsd">
            </div>

            <div class="favorite-user">
                <img src="http://wx.qlogo.cn/mmopen/s9lI61bpfShs1eVDgnqEiaq5bRpEXMayfHacSoFghmhp5wH9x6ibCCA5nM6wdDeurofc6VJribBPu4r0gPI2ick0aniadIHiapeY5E/0" alt="sdsd">
            </div>

            <div class="favorite-user">
                <img src="http://wx.qlogo.cn/mmopen/s9lI61bpfShs1eVDgnqEiaq5bRpEXMayfHacSoFghmhp5wH9x6ibCCA5nM6wdDeurofc6VJribBPu4r0gPI2ick0aniadIHiapeY5E/0" alt="sdsd">
            </div>

        </div>

    </div>

</template>

<script>
    export default {
        props:['favorites','favorites_count','is_favorited','article_id'],
        data(){
            return {
                isFavorited: this.is_favorited,
                favoritesList: this.favorites,
                favoritesCount: this.favorites_count
            }
        },
        methods:{

            toggleFavorite(){
                this.isFavorited ? this.unFavorite() : this.favorite();
            },
            favorite(){

                axios.post('/api/v1/favorites',{
                    'type':'article',
                    'type_id':this.article_id
                }).then((data)=>{
                    this.isFavorited = true
                    this.favoritesCount++;
                    console.log(data.data);
                }).catch((err)=>{
                    console.log(err.response.data);

                });


            },
            unFavorite(){
                axios.post('/api/v1/favorites?_method=delete',{
                    'type':'article',
                    'type_id':this.article_id
                }).then((data)=>{
                    this.isFavorited = false;
                    this.favoritesCount--;
                }).catch((err)=>{
                });
            },

        }

    }

</script>